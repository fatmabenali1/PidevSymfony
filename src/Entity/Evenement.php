<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evenement
 *
 * @ORM\Table(name="evenement")
 * @ORM\Entity
 */
class Evenement
{
    /**
     * @var int
     *
     * @ORM\Column(name="Event_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $eventId;

    /**
     * @var string
     *
     * @ORM\Column(name="Event_name", type="string", length=30, nullable=false)
     */
    private $eventName;

    /**
     * @var string
     *
     * @ORM\Column(name="CityName", type="string", length=30, nullable=false)
     */
    private $cityname;

    /**
     * @var string
     *
     * @ORM\Column(name="Event_description", type="text", length=65535, nullable=false)
     */
    private $eventDescription;

    /**
     * @var int
     *
     * @ORM\Column(name="EventPrice", type="integer", nullable=false)
     */
    private $eventprice;

    /**
     * @var string
     *
     * @ORM\Column(name="EventPoster", type="string", length=120, nullable=false)
     */
    private $eventposter;

    /**
     * @var string
     *
     * @ORM\Column(name="Event_pic2", type="string", length=120, nullable=false)
     */
    private $eventPic2;

    /**
     * @var string
     *
     * @ORM\Column(name="Event_pic3", type="string", length=120, nullable=false)
     */
    private $eventPic3;


}
