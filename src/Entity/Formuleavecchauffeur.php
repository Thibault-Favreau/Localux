<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formuleavecchauffeur
 *
 * @ORM\Table(name="FORMULEAVECCHAUFFEUR", indexes={@ORM\Index(name="FK_FORMULEAVECCHAUFFEUR_LOCAVECCHAUFFEUR", columns={"NUMLOCATION"})})
 * @ORM\Entity
 */
class Formuleavecchauffeur extends Formule
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="LIEU", type="string", length=255, nullable=true)
     */
    private $lieu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TARIF", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $tarif;

    

    /**
     * @var \Locavecchauffeur
     *
     * @ORM\ManyToOne(targetEntity="Locavecchauffeur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="NUMLOCATION", referencedColumnName="NUMLOCATION")
     * })
     */
    private $numlocation;

    

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(?string $lieu): self
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getTarif(): ?string
    {
        return $this->tarif;
    }

    public function setTarif(?string $tarif): self
    {
        $this->tarif = $tarif;

        return $this;
    }

    

    public function getNumlocation(): ?Locavecchauffeur
    {
        return $this->numlocation;
    }

    public function setNumlocation(?Locavecchauffeur $numlocation): self
    {
        $this->numlocation = $numlocation;

        return $this;
    }


}
