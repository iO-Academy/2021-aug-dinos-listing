<?php
use DinoApp\Dinosaur\Dinosaur;
use DinoApp\Museum\Museum;

require_once 'vendor/autoload.php';

$tom = new Dinosaur(1, 'Tom', 'Herbivore', 39.9, 420,69,3,5,69,
'Icons/omnivore.png', 'herbivore.png');


$dinoArray = [$tom, $tom, $tom];

echo Museum::displayAllDinos($dinoArray);