<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Coute
 *
 * @ORM\Table(name="COUTE", uniqueConstraints={@ORM\UniqueConstraint(name="index", columns={"ID_MODELE"}), @ORM\UniqueConstraint(name="indexFormule", columns={"ID_FORMULE"})})
 * @ORM\Entity
 */
class Coute
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var float|null
     *
     * @ORM\Column(name="TARIF", type="float", precision=4, scale=2, nullable=true)
     */
    private $tarif;

    /**
     * @var \Formule
     *
     * @ORM\ManyToOne(targetEntity="Formule")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_FORMULE", referencedColumnName="IDFormule")
     * })
     */
    private $idFormule;

    /**
     * @var \Modele
     *
     * @ORM\ManyToOne(targetEntity="Modele")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_MODELE", referencedColumnName="IdModele")
     * })
     */
    private $idModele;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTarif(): ?float
    {
        return $this->tarif;
    }

    public function setTarif(?float $tarif): self
    {
        $this->tarif = $tarif;

        return $this;
    }

    public function getIdFormule(): ?Formule
    {
        return $this->idFormule;
    }

    public function setIdFormule(?Formule $idFormule): self
    {
        $this->idFormule = $idFormule;

        return $this;
    }

    public function getIdModele(): ?Modele
    {
        return $this->idModele;
    }

    public function setIdModele(?Modele $idModele): self
    {
        $this->idModele = $idModele;

        return $this;
    }


}
