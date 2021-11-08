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

    /** Class Constructor made for the purposes of unit testing
     * @param int $id
     * @param string $species
     * @param string $foodType
     * @param float $height
     * @param float $weight
     * @param float $length
     * @param int $killerRating
     * @param int $intelligence
     * @param int $age
     * @param string $imageUrl
     */
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

    /** Returns the id of the dinosaur
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /** Returns the species of the dinosaur
     * @return string
     */
    public function getSpecies(): string
    {
        return $this->species;
    }
    /** Returns the foodType of the dinosaur
     * @return string
     */
    public function getFoodType(): string
    {
        return $this->foodType;
    }
    /** Returns the height of the dinosaur
     * @return float
     */
    public function getHeight(): float
    {
        return $this->height;
    }
    /** Returns the weight of the dinosaur
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }
    /** Returns the length of the dinosaur
     * @return float
     */
    public function getLength(): float
    {
        return $this->length;
    }
    /** Returns the killerRating of the dinosaur
     * @return int
     */
    public function getKillerRating(): int
    {
        return $this->killerRating;
    }
    /** Returns the intelligence of the dinosaur
     * @return int
     */
    public function getIntelligence(): int
    {
        return $this->intelligence;
    }
    /** Returns the age of the dinosaur
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }
    /** Returns the imageUrl of the dinosaur
     * @return string
     */
    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }
}

