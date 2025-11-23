<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\StableRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StableRepository::class)]
#[ApiResource]
class Stable
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\OneToMany(mappedBy: 'stable', targetEntity: Uma::class)]
    private Collection $umas;

    public function __construct()
    {
        $this->umas = new ArrayCollection();
    }

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

    /**
     * @return Collection<int, Uma>
     */
    public function getUmas(): Collection
    {
        return $this->umas;
    }

    public function addUma(Uma $uma): static
    {
        if (!$this->umas->contains($uma)) {
            $this->umas->add($uma);
            $uma->setStable($this);
        }

        return $this;
    }

    public function removeUma(Uma $uma): static
    {
        if ($this->umas->removeElement($uma)) {
            // set the owning side to null (unless already changed)
            if ($uma->getStable() === $this) {
                $uma->setStable(null);
            }
        }

        return $this;
    }
}
