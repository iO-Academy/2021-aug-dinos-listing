<?php

namespace DinoApp\DinosaurHydrator;

use DinoApp\Dinosaur\Dinosaur;
use PDO;

class DinosaurHydrator
{
    public static function getAllDinos() : Array
    {
        // Creates a variable which points to the correct database and gives username and password
        $db = new PDO('mysql:host=db;dbname=dinosaurs;', 'root', 'password');
        // Prepares (/stores) the criteria for data we want to retrieve from the db
        $query = $db->prepare('SELECT `dinos`.`id`, `dinos`.`species`, `dinos`.`foodType`, `dinos`.`height`, `dinos`.`weight`, `dinos`.`length`, `dinos`.`killerRating`, `dinos`.`intelligence`, `dinos`.`age`, `dinos`.`imageUrl` FROM `dinos` INNER JOIN `foodTypes` ON `dinos`.`foodType` = `foodTypes`.`id`;');
        $query->execute();
        // Sets the fetch mode (what format we get the data returned in) to the class of Dinosaur
        $query->setFetchMode(PDO::FETCH_CLASS, Dinosaur::class);
        // Fetches all rows which match the criteria (as opposed to fetch() which returns one row)
        return $query->fetchAll();
    }

    public static function getDino(int $id) : Dinosaur
    {
        // Creates a variable which points to the correct database and gives username and password
        $db = new PDO('mysql:host=db;dbname=dinosaurs;', 'root', 'password');
        // Prepares (/stores) the criteria for data we want to retrieve from the db
        $query = $db->prepare('SELECT `dinos`.`id`, `dinos`.`species`, `dinos`.`foodType`, `dinos`.`height`, `dinos`.`weight`, `dinos`.`length`, `dinos`.`killerRating`, `dinos`.`intelligence`, `dinos`.`age`, `dinos`.`imageUrl` FROM `dinos` INNER JOIN `foodTypes` ON `dinos`.`foodType` = `foodTypes`.`id` WHERE `id` = :id;');
        $query->execute([':id' => $id]);
        // Sets the fetch mode (what format we get the data returned in) to the class of Dinosaur
        $query->setFetchMode(PDO::FETCH_CLASS, Dinosaur::class);
        // Fetches all rows which match the criteria (as opposed to fetch() which returns one row)
        return $query->fetch();
    }
}