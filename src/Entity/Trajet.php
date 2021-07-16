<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\TrajetRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
//qsqsd zefze
/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=TrajetRepository::class)
 */
class Trajet
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lib;

    /**
     * @ORM\ManyToOne(targetEntity=Commune::class, inversedBy="trajets")
     */
    private $commune;

    /**
     * @ORM\ManyToMany(targetEntity=Arret::class, inversedBy="trajets")
     */
    private $arret;

    /**
     * @ORM\ManyToMany(targetEntity=MoyenTransport::class, inversedBy="trajets")
     */
    private $moyenTransport;

    public function __construct()
    {
        $this->arret = new ArrayCollection();
        $this->moyenTransport = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLib(): ?string
    {
        return $this->lib;
    }

    public function setLib(string $lib): self
    {
        $this->lib = $lib;

        return $this;
    }

    public function getCommune(): ?Commune
    {
        return $this->commune;
    }

    public function setCommune(?Commune $commune): self
    {
        $this->commune = $commune;

        return $this;
    }

    /**
     * @return Collection|Arret[]
     */
    public function getArret(): Collection
    {
        return $this->arret;
    }

    public function addArret(Arret $arret): self
    {
        if (!$this->arret->contains($arret)) {
            $this->arret[] = $arret;
        }

        return $this;
    }

    public function removeArret(Arret $arret): self
    {
        $this->arret->removeElement($arret);

        return $this;
    }

    /**
     * @return Collection|MoyenTransport[]
     */
    public function getMoyenTransport(): Collection
    {
        return $this->moyenTransport;
    }

    public function addMoyenTransport(MoyenTransport $moyenTransport): self
    {
        if (!$this->moyenTransport->contains($moyenTransport)) {
            $this->moyenTransport[] = $moyenTransport;
        }

        return $this;
    }

    public function removeMoyenTransport(MoyenTransport $moyenTransport): self
    {
        $this->moyenTransport->removeElement($moyenTransport);

        return $this;
    }
}
