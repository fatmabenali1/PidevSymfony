<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users", uniqueConstraints={@ORM\UniqueConstraint(name="Username", columns={"Username"})})
 * @ORM\Entity
 */
class Users
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
     * @ORM\Column(name="Password", type="string", length=30, nullable=false)
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
     * @ORM\Column(name="Nationality", type="string", length=50, nullable=true)
     */
    private $nationality;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Langue", type="string", length=50, nullable=true)
     */
    private $langue;


}
