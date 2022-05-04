<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formulesanschauffeur
 *
 * @ORM\Table(name="FORMULESANSCHAUFFEUR", indexes={@ORM\Index(name="FK_FORMULESANSCHAUFFEUR_LOCSANSCHAUFFEUR", columns={"NUMLOCATION"})})
 * @ORM\Entity
 */
class Formulesanschauffeur extends Formule
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
     * @var \Locsanschauffeur
     *
     * @ORM\ManyToOne(targetEntity="Locsanschauffeur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="NUMLOCATION", referencedColumnName="NUMLOCATION")
     * })
     */
    private $numlocation;


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

    

    public function getNumlocation(): ?Locsanschauffeur
    {
        return $this->numlocation;
    }

    public function setNumlocation(?Locsanschauffeur $numlocation): self
    {
        $this->numlocation = $numlocation;

        return $this;
    }


}
