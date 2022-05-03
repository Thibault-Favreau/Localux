<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salarie
 *
 * @ORM\Table(name="SALARIE")
 * @ORM\Entity
 */
class Salarie
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="POSTE", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $poste;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NOM", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PRENOM", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $prenom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LOGIN", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $login;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MOTDEPASSE", type="string", length=512, nullable=true)
     */
    private $motdepasse;

    /**
     * @var \User
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID", referencedColumnName="ID")
     * })
     */
    private $id;


}
