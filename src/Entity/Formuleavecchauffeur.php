<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formuleavecchauffeur
 *
 * @ORM\Table(name="FORMULEAVECCHAUFFEUR", indexes={@ORM\Index(name="FK_FORMULEAVECCHAUFFEUR_LOCAVECCHAUFFEUR", columns={"NUMLOCATION"})})
 * @ORM\Entity
 */
class Formuleavecchauffeur
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
     * @var string|null
     *
     * @ORM\Column(name="LIBELLE", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $libelle;

    /**
     * @var \Locavecchauffeur
     *
     * @ORM\ManyToOne(targetEntity="Locavecchauffeur")
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


}
