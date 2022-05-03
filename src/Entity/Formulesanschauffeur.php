<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formulesanschauffeur
 *
 * @ORM\Table(name="FORMULESANSCHAUFFEUR", indexes={@ORM\Index(name="FK_FORMULESANSCHAUFFEUR_LOCSANSCHAUFFEUR", columns={"NUMLOCATION"})})
 * @ORM\Entity
 */
class Formulesanschauffeur
{
    /**
     * @var int|null
     *
     * @ORM\Column(name="DUREE", type="integer", nullable=true)
     */
    private $duree;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NBKMSINCLUS", type="integer", nullable=true)
     */
    private $nbkmsinclus;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LIBELLE", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $libelle;

    /**
     * @var \Locsanschauffeur
     *
     * @ORM\ManyToOne(targetEntity="Locsanschauffeur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="NUMLOCATION", referencedColumnName="NUMLOCATION")
     * })
     */
    private $numlocation;

    /**
     * @var \Formule
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Formule")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID", referencedColumnName="IDFormule")
     * })
     */
    private $id;

    public function getDuree(): ?int
    {
        return $this->duree;
    }

    public function setDuree(?int $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    public function getNbkmsinclus(): ?int
    {
        return $this->nbkmsinclus;
    }

    public function setNbkmsinclus(?int $nbkmsinclus): self
    {
        $this->nbkmsinclus = $nbkmsinclus;

        return $this;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(?string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getNumlocation(): ?Locsanschauffeur
    {
        return $this->numlocation;
    }

    public function setNumlocation(?Locsanschauffeur $numlocation): self
    {
        $this->numlocation = $numlocation;

        return $this;
    }

    public function getId(): ?Formule
    {
        return $this->id;
    }

    public function setId(?Formule $id): self
    {
        $this->id = $id;

        return $this;
    }


}
