<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formule
 *
 * @ORM\Table(name="FORMULE")
 * @ORM\Entity
 */
class Formule
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDFormule", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idformule;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LIBELLE", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $libelle;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Modele", inversedBy="id")
     * @ORM\JoinTable(name="coute",
     *   joinColumns={
     *     @ORM\JoinColumn(name="ID", referencedColumnName="IDFormule")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="ID_1", referencedColumnName="IdModele")
     *   }
     * )
     */
    private $id1;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->id1 = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
