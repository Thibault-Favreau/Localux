<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Locavecchauffeur
 *
 * @ORM\Table(name="LOCAVECCHAUFFEUR")
 * @ORM\Entity
 */
class Locavecchauffeur extends Location
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="COMMENTAIRE", type="string", length=255, nullable=true, options={"fixed"=true})
     */
    private $commentaire;

    
    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(?string $commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    
}
