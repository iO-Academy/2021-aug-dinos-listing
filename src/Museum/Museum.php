<?php

namespace DinoApp\Museum;

use DinoApp\Dinosaur\Dinosaur;

class Museum
{
    public static function displayAllDinos(array $dinos) :string
    {
        $output='';
        foreach ($dinos as $dino){
            if($dino instanceof Dinosaur){
                $output .= '<div>';
                $output .=     '<h2>' . $dino->getSpecies() . '</h2>';
                $output .=     '<div>';
                $output .=         '<img src="' . $dino->getImageUrl() .'"/>';
                $output .=     '</div>';
                $output .=     '<div>';
                $output .=         '<div>' . $dino->getFoodType() . '</div>';
                $output .=         '<button>More</button>';
                $output .=     '</div>';
                $output .= '</div>';
            }
        }
        return $output;
    }
}