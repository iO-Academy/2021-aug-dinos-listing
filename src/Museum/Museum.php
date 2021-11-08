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
            if($dino){
                $output .= '<div>';
                $output .=     '<h2>' . $dino->getSpecies() . '</h2>';
                $output .=     '<div>';
                $output .=         '<img src="' . $dino->getImageUrl() .'"/>';
                $output .=     '</div>';
                $output .=     '<div>';
                $output .=         '<div>';
                $output .=             '<img src="' . FoodIcon::getIconUrl($dino->getFoodType()) . '"/>';
                $output .=             '<div>' . $dino->getFoodType() . '</div>';
                $output .=         '</div>';
                $output .=         '<button>More</button>';
                $output .=     '</div>';
                $output .= '</div>';
            }
        }
        return $output;
    }
}