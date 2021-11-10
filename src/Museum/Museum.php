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
        if($dinos){
            foreach ($dinos as $dino){
                if($dino instanceof Dinosaur){
                $output .= '<div class="card m-4" style="width: 18rem;">';
                $output .=     '<h2 class="card-title text-center mt-3">' . $dino->getSpecies() . '</h2>';
                $output .=     '<div class="dino-img-container mx-auto" role="img" aria-label="' . $dino->getSpecies() . ' photo" style="background-image: url(' . $dino->getImageUrl() .');"></div>';
                $output .=     '<div class="card-body d-flex flex-column align-items-center">';
                $output .=         '<div class="food-type d-flex flex-row align-items-center">';
                $output .=             '<img width="50px" alt="Icon to represent '. $dino->getFoodType().'" src="Icons/' . $dino->getLogoUrl() . '"/>';
                $output .=             '<p class="card-text">' . $dino->getFoodType() . '</p>';
                $output .=         '</div>';
                $output .=         '<div>';
                $output .=              '<a href="displayCase.php?id=' . $dino->getId() . '" tabindex="-1"><button class="button" aria-label="View more about ' . $dino->getSpecies() . '">More info</button></a>';
                $output .=         '</div>';
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

    public static function displayDino(Dinosaur $dino) :string
    {
        $output = '<div class="container displayCase p-4">';
        $output .=     '<div class="row">';
        $output .=          '<div class="col-lg row-sm">';
        $output .=              '<img class="w-100 img01" alt="Image of a ' . $dino->getSpecies() . '" src="' . $dino->getImageUrl() . '" />';
        $output .=          '</div>';
        $output .=          '<div class="col-lg row-sm">';
        $output .=              '<div class="">';
        $output .=                  '<h1 class="text-center">' . $dino->getSpecies() . '</h1>';
        $output .=                  '<div class="d-flex justify-content-center">';
        $output .=                      '<img width="50px" alt="Icon to represent '. $dino->getFoodType().'" src="Icons/' . $dino->getLogoUrl() . '"/>';
        $output .=                      '<h2 class="m-0">' . $dino->getFoodType() . '</h2>';
        $output .=                  '</div>';
        $output .=                  '<div class="container">';
        $output .=                      '<div class="row d-flex flex-row justify-content-between">';
        $output .=                         '<p class="">Height:</p>';
        $output .=                         '<p class="stat">' . $dino->getHeight() . 'ft</p>';
        $output .=                      '</div>';
        $output .=                      '<div class="row d-flex flex-row justify-content-between">';
        $output .=                         '<p class="">Weight:</p>';
        $output .=                         '<p class="stat">' . $dino->getWeight() . 'lbs</p>';
        $output .=                      '</div>';
        $output .=                      '<div class="row d-flex flex-row justify-content-between">';
        $output .=                         '<p class="">Length:</p>';
        $output .=                         '<p class="stat">' . $dino->getLength() . 'ft</p>';
        $output .=                      '</div>';
        $output .=                      '<div class="row d-flex flex-row justify-content-between">';
        $output .=                         '<p class="">Killer Rating:</p>';
        $output .=                         '<p class="stat">' . $dino->getKillerRating() . '/10</p>';
        $output .=                       '</div>';
        $output .=                       '<div class="row d-flex flex-row justify-content-between">';
        $output .=                         '<p class="">Intelligence:</p>';
        $output .=                         '<p class="stat">' . $dino->getIntelligence() . '/10</p>';
        $output .=                       '</div>';
        $output .=                       '<div class="row d-flex flex-row justify-content-between">';
        $output .=                          '<p class="">They lived:</p>';
        $output .=                          '<p class="stat">' . $dino->getAge() . ' million years ago</p>';
        $output .=                       '</div>';
        $output .=                  '</div>';
        $output .=              '</div>';
        $output .=         '</div>';
        $output .=     '</div>';
        $output .=     '<div class="row justify-content-center">';
        $output .=         '<a href="index.php" tabindex="-1">';
        $output .=             '<button class="button">Go Home</button>';
        $output .=         '</a>';
        $output .=     '</div>';
        $output .= '</div>';
        return $output;
    }
}

