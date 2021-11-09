<?php
use DinoApp\Dinosaur\Dinosaur;
use DinoApp\Museum\Museum;

require_once 'vendor/autoload.php';
$url = 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/16/Maiasaura_skeleton.jpg/220px-Maiasaura_skeleton.jpg';
$testDino = $testDino = new Dinosaur(1, 'test', 'Herbivore', 52.5, 420, 26.2, 9, 2,69, $url, 'herbivore.png');



$dinoArray = [$testDino, $testDino, $testDino];

echo Museum::displayAllDinos($dinoArray);