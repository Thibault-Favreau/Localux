<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Location
 *
 * @ORM\Table(name="LOCATION", indexes={@ORM\Index(name="FK_LOCATION_CLIENT", columns={"ID"}), @ORM\Index(name="FK_LOCATION_VEHICULE", columns={"IMMATRICULATION"})})
 * @ORM\Entity
 */
class Location
{
    /**
     * @var int
     *
     * @ORM\Column(name="NUMLOCATION", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numlocation;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATELOCATION", type="date", nullable=true)
     */
    private $datelocation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MONTANTREGLE", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $montantregle;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATEHEUREDEPARTPREVU", type="datetime", nullable=true)
     */
    private $dateheuredepartprevu;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATEHEURERETOURPREVU", type="datetime", nullable=true)
     */
    private $dateheureretourprevu;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATEHEUREDEPARTREEL", type="datetime", nullable=true)
     */
    private $dateheuredepartreel;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATEHEURERETOURREEL", type="datetime", nullable=true)
     */
    private $dateheureretourreel;

    /**
     * @var \Vehicule
     *
     * @ORM\ManyToOne(targetEntity="Vehicule")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IMMATRICULATION", referencedColumnName="IMMATRICULATION")
     * })
     */
    private $immatriculation;

    /**
     * @var \Client
     *
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID", referencedColumnName="ID")
     * })
     */
    private $id;


}
