<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/** A car. */
#[ORM\Entity]
#[ApiResource]
class Review
{
    /** The ID of this car. */
    #[ORM\Id, ORM\Column, ORM\GeneratedValue]
    private ?int $id = null;

    /** The rating of this review (between 1 and 10). */
    #[ORM\Column(type: 'smallint')]
    #[Assert\Range(min: 1, max: 10)]
    public int $rating = 1;

    /** The reviewText of this review. */
    #[ORM\Column(type: 'text')]
    #[Assert\NotBlank]
    public string $reviewText = "";

    /** The car this review is about. */
    #[ORM\ManyToOne(inversedBy: 'reviews')]
    #[Assert\NotNull]
    public ?Car $car = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getRating(): int
    {
        return $this->rating;
    }

    public function setRating(int $rating): void
    {
        $this->rating = $rating;
    }

    public function getReviewText(): string
    {
        return $this->reviewText;
    }

    public function setReviewText(string $reviewText): void
    {
        $this->reviewText = $reviewText;
    }

    public function getCar(): ?Car
    {
        return $this->car;
    }

    public function setCar(?Car $car): void
    {
        $this->car = $car;
    }
}
