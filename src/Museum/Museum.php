<?php

namespace DinoApp\Museum;

use DinoApp\Dinosaur\Dinosaur;

class Museum
{
    /**
     * Takes in an array of dinosaur objects and puts them into the format to be displayed on the homepage.
     *
     * @param array $dinos an array of Dinosaur objects.
     * @return string
     */
    public static function displayAllDinos(array $dinos) :string
    {
        $output='';
        if($dinos){
            foreach ($dinos as $dino){
                if($dino instanceof Dinosaur){
                    $output .= '<div class="card m-4" style="width: 18rem;">';
                    $output .=     '<h2 class="card-title text-center mt-3">' . $dino->getSpecies() . '</h2>';
                    $output .=     '<div class="dino-img-container mx-auto" style="background-image: url(' . $dino->getImageUrl() .');"></div>';
                    $output .=     '<div class="card-body d-flex flex-row align-items-center py-5">';
                    $output .=         '<div class="food-type d-flex flex-row align-items-center">';
                    $output .=             '<img width="50px" alt="Icon to represent '. $dino->getFoodType().'" src="Icons/' . $dino->getLogoUrl() . '"/>';
                    $output .=             '<p class="card-text">' . $dino->getFoodType() . '</p>';
                    $output .=         '</div>';
//                    $output .=         '<div class="button">';
//                    $output .=              '<a href="#" class="btn">More info</a>';
//                    $output .=         '</div>';
                    $output .=     '</div>';
                    $output .= '</div>';
                }else{
                    $output .= 'This is not a Dinosaur :(. <br>';
                }
            }
        }else{
            $output .= "Sorry the Dinosaurs are all extinct :'(";
        }
        return $output;
    }
}

