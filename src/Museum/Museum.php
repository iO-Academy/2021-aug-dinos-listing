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
                $output .=             '<img width="50px" alt="Icon to represent '. $dino->getFoodType().'" src="Icons/' . $dino->getLogoUrl() . '"/>';
                $output .=             '<p class="card-text">' . $dino->getFoodType() . '</p>';
                $output .=         '</div>';
                $output .=         '<div class="button">';
                $output .=              '<a href="displayCase.php?id=' . $dino->getId() . '" class="btn">More info</a>';
                $output .=         '</div>';
                $output .=     '</div>';
                $output .= '</div>';
            }
        }
        return $output;
    }

    public static function displayDino(Dinosaur $dino) :string
    {
        $output = '<div class="container displayCase p-4">';
        $output .=     '<div class="row ">';
        $output .=          '<div class="col">';
        $output .=              '<img class="w-100 img01" alt="Image of a ' . $dino->getSpecies() . '" src="' . $dino->getImageUrl() . '" />';
        $output .=          '</div>';
        $output .=          '<div class="col-6">';
        $output .=              '<div class="">';
        $output .=                  '<h2 class="align-text-center">' . $dino->getSpecies() . '</h2>';
        $output .=                  '<div class="">';
        $output .=                      '<img src="' . FoodIcon::getIconUrl($dino->getFoodType()) . '"/>';
        $output .=                  '</div>';
        $output .=                  '<p class="">' . $dino->getFoodType() . '</p>';
        $output .=                  '<p class="">Height: ' . $dino->getHeight() . 'ft</p>';
        $output .=                  '<p class="">Weight: ' . $dino->getWeight() . 'lbs</p>';
        $output .=                  '<p class="">Length: ' . $dino->getLength() . 'ft</p>';
        $output .=                  '<p class="">Killer Rating: ' . $dino->getKillerRating() . '/10</p>';
        $output .=                  '<p class="">Intelligence: ' . $dino->getIntelligence() . '/10</p>';
        $output .=                  '<p class="">They lived ' . $dino->getAge() . ' million years ago</p>';
        $output .=              '</div>';
        $output .=         '</div>';
        $output .=     '</div>';
        $output .= '</div>';
        return $output;
    }

}

