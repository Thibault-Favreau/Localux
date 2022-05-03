<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Locavecchauffeur
 *
 * @ORM\Table(name="LOCAVECCHAUFFEUR")
 * @ORM\Entity
 */
class Locavecchauffeur
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="COMMENTAIRE", type="string", length=255, nullable=true, options={"fixed"=true})
     */
    private $commentaire;

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

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(?string $commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getDatelocation(): ?\DateTimeInterface
    {
        return $this->datelocation;
    }

    public function setDatelocation(?\DateTimeInterface $datelocation): self
    {
        $this->datelocation = $datelocation;

        return $this;
    }

    public function getMontantregle(): ?string
    {
        return $this->montantregle;
    }

    public function setMontantregle(?string $montantregle): self
    {
        $this->montantregle = $montantregle;

        return $this;
    }

    public function getDateheuredepartprevu(): ?\DateTimeInterface
    {
        return $this->dateheuredepartprevu;
    }

    public function setDateheuredepartprevu(?\DateTimeInterface $dateheuredepartprevu): self
    {
        $this->dateheuredepartprevu = $dateheuredepartprevu;

        return $this;
    }

    public function getDateheureretourprevu(): ?\DateTimeInterface
    {
        return $this->dateheureretourprevu;
    }

    public function setDateheureretourprevu(?\DateTimeInterface $dateheureretourprevu): self
    {
        $this->dateheureretourprevu = $dateheureretourprevu;

        return $this;
    }

    public function getDateheuredepartreel(): ?\DateTimeInterface
    {
        return $this->dateheuredepartreel;
    }

    public function setDateheuredepartreel(?\DateTimeInterface $dateheuredepartreel): self
    {
        $this->dateheuredepartreel = $dateheuredepartreel;

        return $this;
    }

    public function getDateheureretourreel(): ?\DateTimeInterface
    {
        return $this->dateheureretourreel;
    }

    public function setDateheureretourreel(?\DateTimeInterface $dateheureretourreel): self
    {
        $this->dateheureretourreel = $dateheureretourreel;

        return $this;
    }

    public function getNumlocation(): ?Location
    {
        return $this->numlocation;
    }

    public function setNumlocation(?Location $numlocation): self
    {
        $this->numlocation = $numlocation;

        return $this;
    }


}
