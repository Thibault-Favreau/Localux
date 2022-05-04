<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Location
 *
 * @ORM\Table(name="LOCATION", indexes={@ORM\Index(name="FK_LOCATION_VEHICULE", columns={"IMMATRICULATION"}), @ORM\Index(name="FK_LOCATION_CLIENT", columns={"ID"})})
 * @ORM\Entity
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="typeLoca", type="string")
 * @ORM\DiscriminatorMap({"locavecchauffeur" = "Locavecchauffeur", "locsanschauffeur" = "Locsanschauffeur"})
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

    public function getNumlocation(): ?int
    {
        return $this->numlocation;
    }

    public function getDatelocation(): ?\DateTimeInterface
    {
        return $this->datelocation;
    }

    public function setDatelocation(?\DateTimeInterface $datelocation): self
    {
        $this->datelocation = $datelocation;

        return $this;
    }

    public function getMontantregle(): ?string
    {
        return $this->montantregle;
    }

    public function setMontantregle(?string $montantregle): self
    {
        $this->montantregle = $montantregle;

        return $this;
    }

    public function getDateheuredepartprevu(): ?\DateTimeInterface
    {
        return $this->dateheuredepartprevu;
    }

    public function setDateheuredepartprevu(?\DateTimeInterface $dateheuredepartprevu): self
    {
        $this->dateheuredepartprevu = $dateheuredepartprevu;

        return $this;
    }

    public function getDateheureretourprevu(): ?\DateTimeInterface
    {
        return $this->dateheureretourprevu;
    }

    public function setDateheureretourprevu(?\DateTimeInterface $dateheureretourprevu): self
    {
        $this->dateheureretourprevu = $dateheureretourprevu;

        return $this;
    }

    public function getDateheuredepartreel(): ?\DateTimeInterface
    {
        return $this->dateheuredepartreel;
    }

    public function setDateheuredepartreel(?\DateTimeInterface $dateheuredepartreel): self
    {
        $this->dateheuredepartreel = $dateheuredepartreel;

        return $this;
    }

    public function getDateheureretourreel(): ?\DateTimeInterface
    {
        return $this->dateheureretourreel;
    }

    public function setDateheureretourreel(?\DateTimeInterface $dateheureretourreel): self
    {
        $this->dateheureretourreel = $dateheureretourreel;

        return $this;
    }

    public function getImmatriculation(): ?Vehicule
    {
        return $this->immatriculation;
    }

    public function setImmatriculation(?Vehicule $immatriculation): self
    {
        $this->immatriculation = $immatriculation;

        return $this;
    }

    public function getId(): ?Client
    {
        return $this->id;
    }

    public function setId(?Client $id): self
    {
        $this->id = $id;

        return $this;
    }


}
