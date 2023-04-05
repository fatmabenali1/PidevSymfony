<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Productreview
 *
 * @ORM\Table(name="productreview", indexes={@ORM\Index(name="fk_product_rev", columns={"id_Product"})})
 * @ORM\Entity
 */
class Productreview
{
    /**
     * @var int
     *
     * @ORM\Column(name="Review_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $reviewId;

    /**
     * @var string
     *
     * @ORM\Column(name="Product_Name", type="string", length=30, nullable=false)
     */
    private $productName;

    /**
     * @var int
     *
     * @ORM\Column(name="Rating", type="integer", nullable=false)
     */
    private $rating;

    /**
     * @var string
     *
     * @ORM\Column(name="Review_txt", type="string", length=100, nullable=false)
     */
    private $reviewTxt;

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


}
