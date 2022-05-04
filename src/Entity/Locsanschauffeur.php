<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Locsanschauffeur
 *
 * @ORM\Table(name="LOCSANSCHAUFFEUR")
 * @ORM\Entity
 */
class Locsanschauffeur extends Location
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

    

    public function getNbkmdepart(): ?int
    {
        return $this->nbkmdepart;
    }

    public function setNbkmdepart(?int $nbkmdepart): self
    {
        $this->nbkmdepart = $nbkmdepart;

        return $this;
    }

    public function getNbkmretour(): ?int
    {
        return $this->nbkmretour;
    }

    public function setNbkmretour(?int $nbkmretour): self
    {
        $this->nbkmretour = $nbkmretour;

        return $this;
    }

    
}
