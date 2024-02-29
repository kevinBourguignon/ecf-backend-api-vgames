<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\PublisherRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PublisherRepository::class)]
#[ApiResource]
class Publisher
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\OneToMany(targetEntity: Gizmondo::class, mappedBy: 'publisher')]
    private Collection $publisher;

    public function __construct()
    {
        $this->publisher = new ArrayCollection();
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
     * @return Collection<int, Gizmondo>
     */
    public function getPublisher(): Collection
    {
        return $this->publisher;
    }

    public function addPublisher(Gizmondo $publisher): static
    {
        if (!$this->publisher->contains($publisher)) {
            $this->publisher->add($publisher);
            $publisher->setPublisher($this);
        }

        return $this;
    }

    public function removePublisher(Gizmondo $publisher): static
    {
        if ($this->publisher->removeElement($publisher)) {
            // set the owning side to null (unless already changed)
            if ($publisher->getPublisher() === $this) {
                $publisher->setPublisher(null);
            }
        }

        return $this;
    }
}
