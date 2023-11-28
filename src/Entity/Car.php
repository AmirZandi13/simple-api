<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/** A car. */
#[ORM\Entity]
#[ApiResource]
class Car
{
    /** The ID of this car. */
    #[ORM\Id, ORM\Column, ORM\GeneratedValue]
    private ?int $id = null;

    /** The brand of this car. */
    #[ORM\Column]
    #[Assert\NotBlank]
    public string $brand = "";

    /** The model of this car. */
    #[ORM\Column]
    #[Assert\NotBlank]
    public string $model = "";

    /** The color of this car. */
    #[ORM\Column]
    #[Assert\NotBlank]
    public string $color = "";

    /** @var Review[] Available reviews for this car. */
    #[ORM\OneToMany(mappedBy: 'car', targetEntity: Review::class, cascade: ['persist', 'remove'])]
    public iterable $reviews;

    public function __construct()
    {
        $this->reviews = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function setBrand(string $brand): void
    {
        $this->brand = $brand;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function setModel(string $model): void
    {
        $this->model = $model;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;

    }

    public function getReviews(): iterable
    {
        return $this->reviews;
    }

    public function setReviews(iterable $reviews): void
    {
        $this->reviews = $reviews;
    }
}
