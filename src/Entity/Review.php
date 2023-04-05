<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Review
 *
 * @ORM\Table(name="review", uniqueConstraints={@ORM\UniqueConstraint(name="place_id_2", columns={"place_Id"}), @ORM\UniqueConstraint(name="place_Id_3", columns={"place_Id"})}, indexes={@ORM\Index(name="place_Id", columns={"place_Id"}), @ORM\Index(name="place_Id_4", columns={"place_Id"}), @ORM\Index(name="reviewPlace", columns={"id_User"})})
 * @ORM\Entity
 */
class Review
{
    /**
     * @var int
     *
     * @ORM\Column(name="Review_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $reviewId;

    /**
     * @var string
     *
     * @ORM\Column(name="Place_Name", type="string", length=30, nullable=false)
     */
    private $placeName;

    /**
     * @var int
     *
     * @ORM\Column(name="Rating", type="integer", nullable=false)
     */
    private $rating;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Review_txt", type="string", length=120, nullable=true)
     */
    private $reviewTxt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Review_date", type="date", nullable=false)
     */
    private $reviewDate;

    /**
     * @var \Placetovisit
     *
     * @ORM\ManyToOne(targetEntity="Placetovisit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="place_Id", referencedColumnName="Place_Id")
     * })
     */
    private $place;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_User", referencedColumnName="id_User")
     * })
     */
    private $idUser;


}
