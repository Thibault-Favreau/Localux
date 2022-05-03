<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="CLIENT")
 * @ORM\Entity
 */
class Client
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="TEL", type="string", length=10, nullable=true, options={"fixed"=true})
     */
    private $tel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EMAIL", type="string", length=50, nullable=true, options={"fixed"=true})
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RUE", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $rue;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CP", type="string", length=5, nullable=true, options={"fixed"=true})
     */
    private $cp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="VILLE", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $ville;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATEXPIRATION", type="date", nullable=true)
     */
    private $datexpiration;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CRYPTOGRAMME", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $cryptogramme;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NUMCARTE", type="string", length=50, nullable=true, options={"fixed"=true})
     */
    private $numcarte;

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

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(?string $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getRue(): ?string
    {
        return $this->rue;
    }

    public function setRue(?string $rue): self
    {
        $this->rue = $rue;

        return $this;
    }

    public function getCp(): ?string
    {
        return $this->cp;
    }

    public function setCp(?string $cp): self
    {
        $this->cp = $cp;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getDatexpiration(): ?\DateTimeInterface
    {
        return $this->datexpiration;
    }

    public function setDatexpiration(?\DateTimeInterface $datexpiration): self
    {
        $this->datexpiration = $datexpiration;

        return $this;
    }

    public function getCryptogramme(): ?string
    {
        return $this->cryptogramme;
    }

    public function setCryptogramme(?string $cryptogramme): self
    {
        $this->cryptogramme = $cryptogramme;

        return $this;
    }

    public function getNumcarte(): ?string
    {
        return $this->numcarte;
    }

    public function setNumcarte(?string $numcarte): self
    {
        $this->numcarte = $numcarte;

        return $this;
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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(?string $login): self
    {
        $this->login = $login;

        return $this;
    }

    public function getMotdepasse(): ?string
    {
        return $this->motdepasse;
    }

    public function setMotdepasse(?string $motdepasse): self
    {
        $this->motdepasse = $motdepasse;

        return $this;
    }

    public function getId(): ?User
    {
        return $this->id;
    }

    public function setId(?User $id): self
    {
        $this->id = $id;

        return $this;
    }


}
