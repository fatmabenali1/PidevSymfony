<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reports
 *
 * @ORM\Table(name="reports", indexes={@ORM\Index(name="fk_user", columns={"id_User"})})
 * @ORM\Entity
 */
class Reports
{
    /**
     * @var int
     *
     * @ORM\Column(name="Report_Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $reportId;

    /**
     * @var string
     *
     * @ORM\Column(name="Report_Subject", type="string", length=100, nullable=false)
     */
    private $reportSubject;

    /**
     * @var string
     *
     * @ORM\Column(name="Report_Description", type="string", length=100, nullable=false)
     */
    private $reportDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="Involvment", type="string", length=30, nullable=false)
     */
    private $involvment;

    /**
     * @var string
     *
     * @ORM\Column(name="Incident_type", type="string", length=30, nullable=false)
     */
    private $incidentType;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Incident_date", type="date", nullable=false)
     */
    private $incidentDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Incident_Location", type="string", length=30, nullable=true)
     */
    private $incidentLocation;

    /**
     * @var \User
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_User", referencedColumnName="id_User")
     * })
     */
    private $idUser;


}
