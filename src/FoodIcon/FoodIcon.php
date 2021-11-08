<?php

namespace DinoApp\FoodIcon;
use PDO;

class FoodIcon
{
    public static function getIconUrl(string $foodType)
    {
        $db = new PDO('mysql:host=db;dbname=dinosaurs;', 'root', 'password');
        $query = $db->prepare('SELECT `name`, `imageUrl` FROM `foodTypes` WHERE `name` = :name;');
        $query->execute([':name' => $foodType]);
        $query->setFetchMode(PDO::FETCH_ASSOC);
        $iconArray = $query->fetch();
        $output = '';
        if($iconArray){
            $output .= 'Logos/';
            $output .= $iconArray['imageUrl'];
        }
        return $output;
    }
}