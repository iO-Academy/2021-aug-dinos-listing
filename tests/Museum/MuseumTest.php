<?php

require_once 'vendor/autoload.php';

use DinoApp\Museum\Museum;
use DinoApp\Dinosaur\Dinosaur;
use PHPUnit\Framework\TestCase;

class MuseumTest extends TestCase
{
    public function testSuccessDisplayAllDinos()
    {
        $url = 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/16/Maiasaura_skeleton.jpg/220px-Maiasaura_skeleton.jpg';
        $testDino = new Dinosaur(1, 'test', 'Herbivore', 52.5, 420, 26.2, 9, 2,69, $url, 'herbivore.png');
        $dinoArray = [$testDino, $testDino, $testDino];
        $result = Museum::displayAllDinos($dinoArray);
        $expected = '<style> .dino1{background-image: url(https://upload.wikimedia.org/wikipedia/commons/thumb/1/16/Maiasaura_skeleton.jpg/220px-Maiasaura_skeleton.jpg);} </style><div class="card m-4" style="width: 18rem;"><h2 class="card-title text-center mt-3">test</h2><div class="dino-img-container mx-auto dino1"></div><div class="card-body d-flex flex-row align-items-center py-5"><div class="food-type d-flex flex-row align-items-center"><img width="50px" src="Icons/herbivore.png"/><p class="card-text">Herbivore</p></div><div class="button"><a href="#" class="btn">More info</a></div></div></div><style> .dino1{background-image: url(https://upload.wikimedia.org/wikipedia/commons/thumb/1/16/Maiasaura_skeleton.jpg/220px-Maiasaura_skeleton.jpg);} </style><div class="card m-4" style="width: 18rem;"><h2 class="card-title text-center mt-3">test</h2><div class="dino-img-container mx-auto dino1"></div><div class="card-body d-flex flex-row align-items-center py-5"><div class="food-type d-flex flex-row align-items-center"><img width="50px" src="Icons/herbivore.png"/><p class="card-text">Herbivore</p></div><div class="button"><a href="#" class="btn">More info</a></div></div></div><style> .dino1{background-image: url(https://upload.wikimedia.org/wikipedia/commons/thumb/1/16/Maiasaura_skeleton.jpg/220px-Maiasaura_skeleton.jpg);} </style><div class="card m-4" style="width: 18rem;"><h2 class="card-title text-center mt-3">test</h2><div class="dino-img-container mx-auto dino1"></div><div class="card-body d-flex flex-row align-items-center py-5"><div class="food-type d-flex flex-row align-items-center"><img width="50px" src="Icons/herbivore.png"/><p class="card-text">Herbivore</p></div><div class="button"><a href="#" class="btn">More info</a></div></div></div>';
        $this->assertEquals($expected, $result);
    }

    public function testMalformedDisplayAllDinos()
    {
        $this->expectException(TypeError::class);
        $case = Museum::displayAllDinos('');
    }
}
