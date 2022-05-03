<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Modele
 *
 * @ORM\Table(name="MODELE")
 * @ORM\Entity
 */
class Modele
{
    /**
     * @var int
     *
     * @ORM\Column(name="IdModele", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmodele;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NOM", type="string", length=50, nullable=true, options={"fixed"=true})
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TARIFKMENPLUS", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $tarifkmenplus;

    public function getIdmodele(): ?int
    {
        return $this->idmodele;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getTarifkmenplus(): ?string
    {
        return $this->tarifkmenplus;
    }

    public function setTarifkmenplus(?string $tarifkmenplus): self
    {
        $this->tarifkmenplus = $tarifkmenplus;

        return $this;
    }


}
