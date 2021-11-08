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

    // Getters
    public function getId(): int {
        return $this->id;
    }
    public function getSpecies(): string {
        return $this->species;
    }
    public function getFoodType(): string {
        return $this->foodType;
    }
    public function getHeight(): float {
        return $this->height;
    }
    public function getWeight(): float {
        return $this->weight;
    }
    public function getLength(): float {
        return $this->length;
    }
    public function getKillerRating(): int {
        return $this->killerRating;
    }
    public function getIntelligence(): int {
        return $this->intelligence;
    }
    public function getAge(): int {
        return $this->age;
    }
    public function getImageUrl(): string {
        return $this->imageUrl;
    }
}