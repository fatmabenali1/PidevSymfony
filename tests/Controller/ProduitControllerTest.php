<?php

namespace App\Test\Controller;

use App\Entity\Produit;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProduitControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private EntityManagerInterface $manager;
    private EntityRepository $repository;
    private string $path = '/produit/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->manager = static::getContainer()->get('doctrine')->getManager();
        $this->repository = $this->manager->getRepository(Produit::class);

        foreach ($this->repository->findAll() as $object) {
            $this->manager->remove($object);
        }

        $this->manager->flush();
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Produit index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    }

    public function testNew(): void
    {
        $this->markTestIncomplete();
        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        $this->client->submitForm('Save', [
            'produit[nameProd]' => 'Testing',
            'produit[prodDescription]' => 'Testing',
            'produit[typeProd]' => 'Testing',
            'produit[priceProd]' => 'Testing',
            'produit[quantite]' => 'Testing',
            'produit[imageProd]' => 'Testing',
            'produit[status]' => 'Testing',
        ]);

        self::assertResponseRedirects('/sweet/food/');

        self::assertSame(1, $this->getRepository()->count([]));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Produit();
        $fixture->setNameProd('My Title');
        $fixture->setProdDescription('My Title');
        $fixture->setTypeProd('My Title');
        $fixture->setPriceProd('My Title');
        $fixture->setQuantite('My Title');
        $fixture->setImageProd('My Title');
        $fixture->setStatus('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Produit');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Produit();
        $fixture->setNameProd('Value');
        $fixture->setProdDescription('Value');
        $fixture->setTypeProd('Value');
        $fixture->setPriceProd('Value');
        $fixture->setQuantite('Value');
        $fixture->setImageProd('Value');
        $fixture->setStatus('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'produit[nameProd]' => 'Something New',
            'produit[prodDescription]' => 'Something New',
            'produit[typeProd]' => 'Something New',
            'produit[priceProd]' => 'Something New',
            'produit[quantite]' => 'Something New',
            'produit[imageProd]' => 'Something New',
            'produit[status]' => 'Something New',
        ]);

        self::assertResponseRedirects('/produit/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getNameProd());
        self::assertSame('Something New', $fixture[0]->getProdDescription());
        self::assertSame('Something New', $fixture[0]->getTypeProd());
        self::assertSame('Something New', $fixture[0]->getPriceProd());
        self::assertSame('Something New', $fixture[0]->getQuantite());
        self::assertSame('Something New', $fixture[0]->getImageProd());
        self::assertSame('Something New', $fixture[0]->getStatus());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();
        $fixture = new Produit();
        $fixture->setNameProd('Value');
        $fixture->setProdDescription('Value');
        $fixture->setTypeProd('Value');
        $fixture->setPriceProd('Value');
        $fixture->setQuantite('Value');
        $fixture->setImageProd('Value');
        $fixture->setStatus('Value');

        $$this->manager->remove($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertResponseRedirects('/produit/');
        self::assertSame(0, $this->repository->count([]));
    }
}
