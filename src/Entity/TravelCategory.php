<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TravelCategoryRepository")
 */
class TravelCategory
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $category;

    /**
     * @ORM\Column(type="array")
     */
    private $FkVoyage = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(string $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getFkVoyage(): ?array
    {
        return $this->FkVoyage;
    }

    public function setFkVoyage(array $FkVoyage): self
    {
        $this->FkVoyage = $FkVoyage;

        return $this;
    }
}
