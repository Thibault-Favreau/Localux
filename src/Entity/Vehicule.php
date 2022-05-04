<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vehicule
 *
 * @ORM\Table(name="VEHICULE", indexes={@ORM\Index(name="FK_VEHICULE_MODELE", columns={"ID"})})
 * @ORM\Entity
 */
class Vehicule
{
    /**
     * @var string
     *
     * @ORM\Column(name="IMMATRICULATION", type="string", length=7, nullable=false, options={"fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $immatriculation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="COULEUR", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $couleur;

    /**
     * @var \Modele
     *
     * @ORM\ManyToOne(targetEntity="Modele")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID", referencedColumnName="IdModele")
     * })
     */
    private $id;

    public function getImmatriculation(): ?string
    {
        return $this->immatriculation;
    }

    public function getCouleur(): ?string
    {
        return $this->couleur;
    }

    public function setCouleur(?string $couleur): self
    {
        $this->couleur = $couleur;

        return $this;
    }

    public function getId(): ?Modele
    {
        return $this->id;
    }

    public function setId(?Modele $id): self
    {
        $this->id = $id;

        return $this;
    }


}
