<?php

namespace DinoApp\FoodIcon;
use PDO;

class FoodIcon
{
    /**
     * Searches the database for the corresponding image url for a given foodType.
     *
     * @param string $foodType The food type we're
     * @return string
     */
    public static function getIconUrl(string $foodType)
    {
        $db = new PDO('mysql:host=db;dbname=dinosaurs;', 'root', 'password');
        $query = $db->prepare('SELECT `name`, `imageUrl` FROM `foodTypes` WHERE `name` = :name;');
        $query->execute([':name' => $foodType]);
        $query->setFetchMode(PDO::FETCH_ASSOC);
        $iconArray = $query->fetch();
        $output = '';
        if($iconArray){
            $output .= 'Icons/';
            $output .= $iconArray['imageUrl'];
        }
        return $output;
    }
}
