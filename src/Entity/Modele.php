<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Formule", mappedBy="id1")
     */
    private $id;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->id = new \Doctrine\Common\Collections\ArrayCollection();
    }

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

    /**
     * @return Collection<int, Formule>
     */
    public function getId(): Collection
    {
        return $this->id;
    }

    public function addId(Formule $id): self
    {
        if (!$this->id->contains($id)) {
            $this->id[] = $id;
            $id->addId1($this);
        }

        return $this;
    }

    public function removeId(Formule $id): self
    {
        if ($this->id->removeElement($id)) {
            $id->removeId1($this);
        }

        return $this;
    }

}
