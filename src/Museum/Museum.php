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
                $output .= '<style> .dino'. $dino->getId().'{background-image: ' . $dino->getImageUrl() .';} </style>';
                $output .= '<div>';
                $output .=     '<h2>' . $dino->getSpecies() . '</h2>';
                $output .=     '<div class="dino'. $dino->getId().'">';
                $output .=     '</div>';
                $output .=     '<div>';
                $output .=         '<div>';
                $output .=             '<img src="Icons/' . $dino->getLogoUrl() . '"/>';
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
