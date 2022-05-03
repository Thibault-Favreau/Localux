<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Archivemdp
 *
 * @ORM\Table(name="ARCHIVEMDP", indexes={@ORM\Index(name="FK_ARCHIVEMDP_USER", columns={"ID_IDUSER"})})
 * @ORM\Entity
 */
class Archivemdp
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDMdp", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmdp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MDP", type="string", length=512, nullable=true)
     */
    private $mdp;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATECHANGEMENT", type="datetime", nullable=true)
     */
    private $datechangement;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_IDUSER", referencedColumnName="ID")
     * })
     */
    private $idIduser;


}
