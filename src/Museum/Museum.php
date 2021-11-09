<?php

namespace DinoApp\Museum;

use DinoApp\Dinosaur\Dinosaur;
use DinoApp\FoodIcon\FoodIcon;

class Museum
{
    /**
     * Takes in an array of dinosaur objects and puts them into the format to be displayed on the homepage.
     *
     * @param array $dinos an array of Dinosaur objects.
     * @return string The html to display the dinosaurs on the homepage.
     */
    public static function displayAllDinos(array $dinos) :string
    {
        $output='';
        foreach ($dinos as $dino){
            if($dino instanceof Dinosaur){
                $output .= '<div class="card m-4" style="width: 18rem;">';
                $output .=     '<h2 class="card-title text-center mt-3">' . $dino->getSpecies() . '</h2>';
                $output .=     '<div class="dino-img-container mx-auto">';
                $output .=          '<img class="dino-img" alt="Image of a ' . $dino->getSpecies() . '" src="' . $dino->getImageUrl() .'"/>';
                $output .=      '</div>';
                $output .=     '<div class="card-body d-flex flex-row justify-content-space-between align-items-center py-5">';
                $output .=         '<div class="food-type d-flex flex-row">';
                $output .=             '<img width="30px src="' . FoodIcon::getIconUrl($dino->getFoodType()) . '"/>';
                $output .=             '<p class="card-text">' . $dino->getFoodType() . '</p>';
                $output .=         '</div>';
                $output .=         '<div class="button">';
                $output .=              '<a href="#" class="btn">More info</a>';
                $output .=         '</div>';
                $output .=     '</div>';
                $output .= '</div>';
            }
        }
        return $output;
    }
}

