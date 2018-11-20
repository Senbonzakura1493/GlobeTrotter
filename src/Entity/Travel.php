<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TravelRepository")
 */
class Travel
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $fkCategory;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $Destination;

    /**
     * @ORM\Column(type="text")
     */
    private $Resume;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $placeToVisit;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateTime;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFkCategory(): ?string
    {
        return $this->fkCategory;
    }

    public function setFkCategory(string $fkCategory): self
    {
        $this->fkCategory = $fkCategory;

        return $this;
    }

    public function getDestination(): ?string
    {
        return $this->Destination;
    }

    public function setDestination(string $Destination): self
    {
        $this->Destination = $Destination;

        return $this;
    }

    public function getResume(): ?string
    {
        return $this->Resume;
    }

    public function setResume(string $Resume): self
    {
        $this->Resume = $Resume;

        return $this;
    }

    public function getPlaceToVisit(): ?string
    {
        return $this->placeToVisit;
    }

    public function setPlaceToVisit(string $placeToVisit): self
    {
        $this->placeToVisit = $placeToVisit;

        return $this;
    }

    public function getDateTime(): ?\DateTimeInterface
    {
        return $this->dateTime;
    }

    public function setDateTime(\DateTimeInterface $dateTime): self
    {
        $this->dateTime = $dateTime;

        return $this;
    }
}
