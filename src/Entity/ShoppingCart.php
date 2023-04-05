<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShoppingCart
 *
 * @ORM\Table(namphp bin/console make:crude="shopping_cart", indexes={@ORM\Index(name="shop_cart_ibfk_1", columns={"id_Product"}), @ORM\Index(name="shopping_cart_ibfk_1", columns={"user_id"})})
 * @ORM\Entity
 */
class ShoppingCart
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_Cart", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCart;

    /**
     * @var int
     *
     * @ORM\Column(name="price", type="integer", nullable=false)
     */
    private $price;

    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer", nullable=false)
     */
    private $quantity;

    /**
     * @var \Produit
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Produit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_Product", referencedColumnName="id_Produit")
     * })
     */
    private $idProduct;

    /**
     * @var \User
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id_User")
     * })
     */
    private $user;


}
