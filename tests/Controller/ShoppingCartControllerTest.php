<?php

namespace App\Test\Controller;

use App\Entity\ShoppingCart;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ShoppingCartControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private EntityManagerInterface $manager;
    private EntityRepository $repository;
    private string $path = '/shopping/cart/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->manager = static::getContainer()->get('doctrine')->getManager();
        $this->repository = $this->manager->getRepository(ShoppingCart::class);

        foreach ($this->repository->findAll() as $object) {
            $this->manager->remove($object);
        }

        $this->manager->flush();
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('ShoppingCart index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    }

    public function testNew(): void
    {
        $this->markTestIncomplete();
        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        $this->client->submitForm('Save', [
            'shopping_cart[idCart]' => 'Testing',
            'shopping_cart[price]' => 'Testing',
            'shopping_cart[quantity]' => 'Testing',
            'shopping_cart[idProduct]' => 'Testing',
            'shopping_cart[user]' => 'Testing',
        ]);

        self::assertResponseRedirects('/sweet/food/');

        self::assertSame(1, $this->getRepository()->count([]));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new ShoppingCart();
        $fixture->setIdCart('My Title');
        $fixture->setPrice('My Title');
        $fixture->setQuantity('My Title');
        $fixture->setIdProduct('My Title');
        $fixture->setUser('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('ShoppingCart');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new ShoppingCart();
        $fixture->setIdCart('Value');
        $fixture->setPrice('Value');
        $fixture->setQuantity('Value');
        $fixture->setIdProduct('Value');
        $fixture->setUser('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'shopping_cart[idCart]' => 'Something New',
            'shopping_cart[price]' => 'Something New',
            'shopping_cart[quantity]' => 'Something New',
            'shopping_cart[idProduct]' => 'Something New',
            'shopping_cart[user]' => 'Something New',
        ]);

        self::assertResponseRedirects('/shopping/cart/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getIdCart());
        self::assertSame('Something New', $fixture[0]->getPrice());
        self::assertSame('Something New', $fixture[0]->getQuantity());
        self::assertSame('Something New', $fixture[0]->getIdProduct());
        self::assertSame('Something New', $fixture[0]->getUser());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();
        $fixture = new ShoppingCart();
        $fixture->setIdCart('Value');
        $fixture->setPrice('Value');
        $fixture->setQuantity('Value');
        $fixture->setIdProduct('Value');
        $fixture->setUser('Value');

        $$this->manager->remove($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertResponseRedirects('/shopping/cart/');
        self::assertSame(0, $this->repository->count([]));
    }
}
