<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\EtudiantRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=EtudiantRepository::class)
 */
class Etudiant
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $ine;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $mail;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $motDePasse;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $petiteEnveloppe;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $grandeEnveloppe;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $avisPassage;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $colis;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $datePetiteEnveloppe;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateGrandeEnveloppe;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateAvisPassage;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateColis;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $chambre;

    /**
     * @ORM\OneToMany(targetEntity=RendezVous::class, mappedBy="etudiant")
     */
    private $rendezVous;

    public function __construct()
    {
        $this->rendezVous = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIne(): ?string
    {
        return $this->ine;
    }

    public function setIne(string $ine): self
    {
        $this->ine = $ine;

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

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(?string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getMotDePasse(): ?string
    {
        return $this->motDePasse;
    }

    public function setMotDePasse(?string $motDePasse): self
    {
        $this->motDePasse = $motDePasse;

        return $this;
    }

    public function getPetiteEnveloppe(): ?int
    {
        return $this->petiteEnveloppe;
    }

    public function setPetiteEnveloppe(?int $petiteEnveloppe): self
    {
        $this->petiteEnveloppe = $petiteEnveloppe;

        return $this;
    }

    public function getGrandeEnveloppe(): ?int
    {
        return $this->grandeEnveloppe;
    }

    public function setGrandeEnveloppe(?int $grandeEnveloppe): self
    {
        $this->grandeEnveloppe = $grandeEnveloppe;

        return $this;
    }

    public function getAvisPassage(): ?int
    {
        return $this->avisPassage;
    }

    public function setAvisPassage(?int $avisPassage): self
    {
        $this->avisPassage = $avisPassage;

        return $this;
    }

    public function getColis(): ?int
    {
        return $this->colis;
    }

    public function setColis(?int $colis): self
    {
        $this->colis = $colis;

        return $this;
    }

    public function getDatePetiteEnveloppe(): ?\DateTimeInterface
    {
        return $this->datePetiteEnveloppe;
    }

    public function setDatePetiteEnveloppe(?\DateTimeInterface $datePetiteEnveloppe): self
    {
        $this->datePetiteEnveloppe = $datePetiteEnveloppe;

        return $this;
    }

    public function getDateGrandeEnveloppe(): ?\DateTimeInterface
    {
        return $this->dateGrandeEnveloppe;
    }

    public function setDateGrandeEnveloppe(?\DateTimeInterface $dateGrandeEnveloppe): self
    {
        $this->dateGrandeEnveloppe = $dateGrandeEnveloppe;

        return $this;
    }

    public function getDateAvisPassage(): ?\DateTimeInterface
    {
        return $this->dateAvisPassage;
    }

    public function setDateAvisPassage(?\DateTimeInterface $dateAvisPassage): self
    {
        $this->dateAvisPassage = $dateAvisPassage;

        return $this;
    }

    public function getDateColis(): ?\DateTimeInterface
    {
        return $this->dateColis;
    }

    public function setDateColis(?\DateTimeInterface $dateColis): self
    {
        $this->dateColis = $dateColis;

        return $this;
    }

    public function getChambre(): ?string
    {
        return $this->chambre;
    }

    public function setChambre(?string $chambre): self
    {
        $this->chambre = $chambre;

        return $this;
    }

    /**
     * @return Collection|RendezVous[]
     */
    public function getRendezVous(): Collection
    {
        return $this->rendezVous;
    }

    public function addRendezVou(RendezVous $rendezVou): self
    {
        if (!$this->rendezVous->contains($rendezVou)) {
            $this->rendezVous[] = $rendezVou;
            $rendezVou->setEtudiant($this);
        }

        return $this;
    }

    public function removeRendezVou(RendezVous $rendezVou): self
    {
        if ($this->rendezVous->contains($rendezVou)) {
            $this->rendezVous->removeElement($rendezVou);
            // set the owning side to null (unless already changed)
            if ($rendezVou->getEtudiant() === $this) {
                $rendezVou->setEtudiant(null);
            }
        }

        return $this;
    }
}
