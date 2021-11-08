<?php

namespace DinoApp\Dinosaur;

class Dinosaur
{
    protected int $id;
    protected string $species;
    protected string $foodType;
    protected float $height;
    protected float $weight;
    protected float $length;
    protected int $killerRating;
    protected int $intelligence;
    protected int $age;
    protected string $imageUrl;

    // Constructor for the purpose of unit testing
    public function __construct(int $id, string $species, string $foodType, float $height, float $weight, float $length, int $killerRating, int $intelligence, int $age, string $imageUrl)
    {
        $this->id = $id;
        $this->species = $species;
        $this->foodType = $foodType;
        $this->height = $height;
        $this->weight = $weight;
        $this->length = $length;
        $this->killerRating = $killerRating;
        $this->intelligence = $intelligence;
        $this->age = $age;
        $this->imageUrl = $imageUrl;
    }

    // Getters
    public function getId(): int
    {
        return $this->id;
    }
    public function getSpecies(): string
    {
        return $this->species;
    }
    public function getFoodType(): string
    {
        return $this->foodType;
    }
    public function getHeight(): float
    {
        return $this->height;
    }
    public function getWeight(): float
    {
        return $this->weight;
    }
    public function getLength(): float
    {
        return $this->length;
    }
    public function getKillerRating(): int
    {
        return $this->killerRating;
    }
    public function getIntelligence(): int
    {
        return $this->intelligence;
    }
    public function getAge(): int
    {
        return $this->age;
    }
    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }
}