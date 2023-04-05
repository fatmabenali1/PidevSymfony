<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user", indexes={@ORM\Index(name="id_relation", columns={"id_relation"})})
 * @ORM\Entity
 */
class User
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_User", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="User_FirstName", type="string", length=30, nullable=false)
     */
    private $userFirstname;

    /**
     * @var string
     *
     * @ORM\Column(name="User_lastName", type="string", length=30, nullable=false)
     */
    private $userLastname;

    /**
     * @var string
     *
     * @ORM\Column(name="User_mail", type="string", length=30, nullable=false)
     */
    private $userMail;

    /**
     * @var int
     *
     * @ORM\Column(name="User_phone", type="integer", nullable=false)
     */
    private $userPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="Username", type="string", length=30, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="Password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=30, nullable=false)
     */
    private $role;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lang1", type="string", length=120, nullable=true)
     */
    private $lang1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lang2", type="string", length=100, nullable=true)
     */
    private $lang2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lang3", type="string", length=100, nullable=true)
     */
    private $lang3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cityname", type="string", length=100, nullable=true)
     */
    private $cityname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nationality", type="string", length=100, nullable=true)
     */
    private $nationality;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Langue", type="string", length=30, nullable=true)
     */
    private $langue;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateBeg", type="date", nullable=true)
     */
    private $datebeg;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateEnd", type="date", nullable=true)
     */
    private $dateend;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="disponibility", type="boolean", nullable=true)
     */
    private $disponibility;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_relation", type="integer", nullable=true)
     */
    private $idRelation;


}
