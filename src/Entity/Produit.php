<?php

namespace App\Entity;
use App\Entity\Produit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProduitRepository")
 */
class Produit
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_Produit", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProduit;

    /**
     * @var string
     *
     * @Assert\NotBlank(message="Le nom est obligatoire")
     * @Assert\Length(
     *      min = 2,
     *      max = 20,
     *      minMessage = "Le nom doit contenir au moins {{ limit }} caractères",
     *      maxMessage = "Le nom ne peut pas contenir plus de {{ limit }} caractères"
     * )
     * @ORM\Column(name="Name_prod", type="string", length=30, nullable=false)
     */
    private $nameProd;

    /**
     * @var string
      *
     * @Assert\NotBlank(message="Le nom est obligatoire")
     * @Assert\Length(
     *      min = 10,
     *      max = 200,
     *      minMessage = "Le nom doit contenir au moins {{ limit }} caractères",
     *      maxMessage = "Le nom ne peut pas contenir plus de {{ limit }} caractères"
     * )
     * @ORM\Column(name="Prod_Description", type="string", length=2000, nullable=false)
     */
    private $prodDescription;

    /**
     * @var string
     *@Assert\NotBlank(message="Le champ Nom ne peut pas être vide")
     * @ORM\Column(name="Type_prod", type="string", length=30, nullable=false)
     */
    private $typeProd;

    /**
     * @var float
     *@Assert\NotBlank(message="Le champ Nom ne peut pas être vide")
     * @ORM\Column(name="Price_prod", type="float", precision=10, scale=0, nullable=false)
     */
    private $priceProd;

    /**
     * @var int
     * @Assert\NotBlank(message="Le champ Nom ne peut pas être vide")
     * @ORM\Column(name="quantite", type="integer", nullable=false)
     */
    private $quantite;

    /**
     * @var string
     *
     * @ORM\Column(name="image_prod", type="string", length=100, nullable=false)
     */
    private $imageProd;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=10, nullable=false, options={"default"="Available"})
     */
    private $status = 'Available';


    /**
     * Summary of getIdProduit
     * @return int|null
     */
    public function getIdProduit(): ?int
    {
        return $this->idProduit;
    }

    /**
     * Summary of getNameProd
     * @return string|null
     */
    public function getNameProd(): ?string
    {
        return $this->nameProd;
    }

    /**
     * Summary of setNameProd
     * @param string $nameProd
     * @return string
     */
    public function setNameProd(string $nameProd): self
    {
        $this->nameProd = $nameProd;
    
        return $this;
    }
    
    /**
     * Summary of getProdDescription
     * @return string|null
     */
    public function getProdDescription(): ?string
    {
        return $this->prodDescription;
    }

    /**
     * Summary of setProdDescription
     * @param string $prodDescription
     * @return string|null
     */
    public function setProdDescription(string $prodDescription): self
    {
        $this->prodDescription = $prodDescription;

        return $this;
    }
    /**
     * Summary of getTypeProd
     * @return string|null
     */
    public function getTypeProd(): ?string
    {
        return $this->typeProd;
    }

    /**
     * Summary of setTypeProd
     * @param string $typeProd
     * @return string|null
     */
    public function setTypeProd(string $typeProd): self
    {
        $this->typeProd = $typeProd;

        return $this;
    }
    /**
     * Summary of getPriceProd
     * @return string|null
     */
    public function getPriceProd(): ?string
    {
        return $this->priceProd;
    }

    /**
     * Summary of setPriceProd
     * @param string $priceProd
     * @return string|null
     */
    public function setPriceProd(string $priceProd): self
    {
        $this->priceProd = $priceProd;

        return $this;
    }
    /**
     * Summary of getQuantite
     * @return string|null
     */
    public function getQuantite(): ?string
    {
        return $this->quantite;
    }

    /**
     * Summary of setQuantite
     * @param string $quantite
     * @return string|null
     */
    public function setQuantite(string $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Summary of getImageProd
     * @return string|null
     */
    public function getImageProd(): ?string
    {
        return $this->imageProd;
    }

    /**
     * Summary of setImageProd
     * @param string $imageProd
     * @return string|null
     */
    public function setImageProd(string $imageProd): self
    {
        $this->imageProd = $imageProd;

        return $this;
    }   

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    } 
    public function getStatus(): ?string
    {
        return $this->status;
    } 
}
