<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Locsanschauffeur
 *
 * @ORM\Table(name="LOCSANSCHAUFFEUR")
 * @ORM\Entity
 */
class Locsanschauffeur
{
    /**
     * @var int|null
     *
     * @ORM\Column(name="NBKMDEPART", type="integer", nullable=true)
     */
    private $nbkmdepart;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NBKMRETOUR", type="integer", nullable=true)
     */
    private $nbkmretour;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATELOCATION", type="date", nullable=true)
     */
    private $datelocation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MONTANTREGLE", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $montantregle;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATEHEUREDEPARTPREVU", type="datetime", nullable=true)
     */
    private $dateheuredepartprevu;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATEHEURERETOURPREVU", type="datetime", nullable=true)
     */
    private $dateheureretourprevu;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATEHEUREDEPARTREEL", type="datetime", nullable=true)
     */
    private $dateheuredepartreel;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATEHEURERETOURREEL", type="datetime", nullable=true)
     */
    private $dateheureretourreel;

    /**
     * @var \Location
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Location")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="NUMLOCATION", referencedColumnName="NUMLOCATION")
     * })
     */
    private $numlocation;


}
