<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Eventsreview
 *
 * @ORM\Table(name="eventsreview", indexes={@ORM\Index(name="id_user", columns={"id_user"}), @ORM\Index(name="fk_event_eventsrev", columns={"Event_id"})})
 * @ORM\Entity
 */
class Eventsreview
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
     * @ORM\Column(name="Event_name", type="string", length=30, nullable=false)
     */
    private $eventName;

    /**
     * @var string
     *
     * @ORM\Column(name="Review_txt", type="string", length=125, nullable=false)
     */
    private $reviewTxt;

    /**
     * @var \User
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id_User")
     * })
     */
    private $idUser;

    /**
     * @var \Evenement
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Evenement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Event_id", referencedColumnName="Event_id")
     * })
     */
    private $event;


}
