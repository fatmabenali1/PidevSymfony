<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Placetovisit
 *
 * @ORM\Table(name="placetovisit")
 * @ORM\Entity
 */
class Placetovisit
{
    /**
     * @var int
     *
     * @ORM\Column(name="Place_Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $placeId;

    /**
     * @var string
     *
     * @ORM\Column(name="Place_Name", type="string", length=30, nullable=false)
     */
    private $placeName;

    /**
     * @var string
     *
     * @ORM\Column(name="CityName", type="string", length=30, nullable=false)
     */
    private $cityname;

    /**
     * @var string
     *
     * @ORM\Column(name="Place_Type", type="string", length=30, nullable=false)
     */
    private $placeType;

    /**
     * @var string
     *
     * @ORM\Column(name="Place_Description", type="string", length=230, nullable=false)
     */
    private $placeDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="Place_Address", type="string", length=100, nullable=false)
     */
    private $placeAddress;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Tickets_Price", type="float", precision=10, scale=0, nullable=true)
     */
    private $ticketsPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="Place_Img", type="string", length=120, nullable=false)
     */
    private $placeImg;

    /**
     * @var string
     *
     * @ORM\Column(name="Place_img2", type="string", length=120, nullable=false)
     */
    private $placeImg2;

    /**
     * @var string
     *
     * @ORM\Column(name="Place_Img3", type="string", length=120, nullable=false)
     */
    private $placeImg3;


}
