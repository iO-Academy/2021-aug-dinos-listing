<?php

namespace DinoApp\Museum;

use DinoApp\Dinosaur\Dinosaur;

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
                $output .= '<style> .dino'. $dino->getId().'{background-image: url(' . $dino->getImageUrl() .');} </style>';
                $output .= '<div class="card m-4" style="width: 18rem;">';
                $output .=     '<h2 class="card-title text-center mt-3">' . $dino->getSpecies() . '</h2>';
                $output .=     '<div class="dino-img-container mx-auto dino'. $dino->getId().'"></div>';
                $output .=     '<div class="card-body d-flex flex-row align-items-center py-5">';
                $output .=         '<div class="food-type d-flex flex-row align-items-center">';
                $output .=             '<img width="50px" src="Icons/' . $dino->getLogoUrl() . '"/>';
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

