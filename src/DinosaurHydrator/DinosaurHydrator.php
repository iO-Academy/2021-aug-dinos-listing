<?php

namespace DinoApp\DinosaurHydrator;

use DinoApp\Dinosaur\Dinosaur;
use PDO;

class DinosaurHydrator
{
    /** Connects the database and fetches all dinosaur information, appending the foodType
     * table with a left join and returning in an array
     * @param PDO $db
     * @return Array
     */
    public static function getAllDinos(PDO $db) : Array
    {
        // Prepares (/stores) the criteria for data we want to retrieve from the db
        $query = $db->prepare('SELECT `dinos`.`id`, `dinos`.`species`, `foodTypes`.`name` AS `foodType`, `dinos`.`height`, `dinos`.`weight`, `dinos`.`length`, `dinos`.`killerRating`, `dinos`.`intelligence`, `dinos`.`age`, `dinos`.`imageUrl`, `foodTypes`.`imageUrl` AS `logoUrl` FROM `dinos` INNER JOIN `foodTypes` ON `dinos`.`foodType` = `foodTypes`.`id`;');
        $query->execute();
        // Sets the fetch mode (what format we get the data returned in) to the class of Dinosaur
        $query->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, Dinosaur::class);
        // Fetches all rows which match the criteria (as opposed to fetch() which returns one row)
        return $query->fetchAll();
    }

    /** Connects the database and fetches one dinosaur information, appending the foodType
     * table with a left join and returning a Dinosaur object
     * @param PDO $db
     * @param int $id
     * @return
     */
    public static function getDino(PDO $db, int $id): ?Dinosaur
    {
        // Prepares (/stores) the criteria for data we want to retrieve from the db
        $query = $db->prepare('SELECT `dinos`.`id`, `dinos`.`species`, `foodTypes`.`name`  AS `foodType`, `dinos`.`height`, `dinos`.`weight`, `dinos`.`length`, `dinos`.`killerRating`, `dinos`.`intelligence`, `dinos`.`age`, `dinos`.`imageUrl`, `foodTypes`.`imageUrl` AS `logoUrl` FROM `dinos` INNER JOIN `foodTypes` ON `dinos`.`foodType` = `foodTypes`.`id` WHERE `dinos`.`id` = :id;');
        $query->execute([':id' => $id]);
        // Sets the fetch mode (what format we get the data returned in) to the class of Dinosaur
        $query->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, Dinosaur::class);
        // Fetches the row which matches the criteria
        $result = $query->fetch();
        if ($result) {
            return $result;
        }
        return null;
    }

    /** Connects the database and fetches all dinosaur information based on a given search string, appending the foodType
     * table with a left join and returning in an array
     * @param PDO $db
     * @param string $search
     * @return Array
     */
    public static function getSearchedDinos(PDO $db, string $search, string $filter = ''): Array
    {
        // Prepares (/stores) the criteria for data we want to retrieve from the db
        if (trim($filter) !== ''){
            $query = $db->prepare("SELECT `dinos`.`id`, `dinos`.`species`, `foodTypes`.`name` AS `foodType`, `dinos`.`height`, `dinos`.`weight`, `dinos`.`length`, `dinos`.`killerRating`, `dinos`.`intelligence`, `dinos`.`age`, `dinos`.`imageUrl`, `foodTypes`.`imageUrl` AS `logoUrl` FROM `dinos` INNER JOIN `foodTypes` ON `dinos`.`foodType` = `foodTypes`.`id` WHERE `dinos`.`species` LIKE :search AND `foodTypes`.`name` = :filter;");
            $query->execute([':search' => '%' . trim($search) . '%', ':filter' => trim($filter)]);
        } else {
            $query = $db->prepare("SELECT `dinos`.`id`, `dinos`.`species`, `foodTypes`.`name` AS `foodType`, `dinos`.`height`, `dinos`.`weight`, `dinos`.`length`, `dinos`.`killerRating`, `dinos`.`intelligence`, `dinos`.`age`, `dinos`.`imageUrl`, `foodTypes`.`imageUrl` AS `logoUrl` FROM `dinos` INNER JOIN `foodTypes` ON `dinos`.`foodType` = `foodTypes`.`id` WHERE `dinos`.`species` LIKE :search;");
            $query->execute([':search' => '%' . trim($search) . '%']);
        }
        // Sets the fetch mode (what format we get the data returned in) to the class of Dinosaur
        $query->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, Dinosaur::class);
        // Fetches all rows which match the criteria (as opposed to fetch() which returns one row)
        return $query->fetchAll();
    }
}

