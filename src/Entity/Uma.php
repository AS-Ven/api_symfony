<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\UmaRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UmaRepository::class)]
#[ApiResource]
class Uma
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $race = null;

    #[ORM\Column(length: 255)]
    private ?string $style = null;

    #[ORM\ManyToOne(inversedBy: 'umas')]
    private ?Stable $stable = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getRace(): ?string
    {
        return $this->race;
    }

    public function setRace(string $race): static
    {
        $this->race = $race;

        return $this;
    }

    public function getStyle(): ?string
    {
        return $this->style;
    }

    public function setStyle(string $style): static
    {
        $this->style = $style;

        return $this;
    }

    public function getStable(): ?Stable
    {
        return $this->stable;
    }

    public function setStable(?Stable $stable): static
    {
        $this->stable = $stable;

        return $this;
    }
}
