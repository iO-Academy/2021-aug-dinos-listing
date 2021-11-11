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
        $dinosaurMock = $this->createMock(Dinosaur::class);
        $dinosaurMock->method('getFoodType')
            ->willReturn('Herbivore');
        $dinosaurMock->method('getSpecies')
            ->willReturn('test');
        $dinosaurMock->method('getId')
            ->willReturn(1);
        $dinosaurMock->method('getImageUrl')
            ->willReturn($url);
        $dinosaurMock->method('getLogoUrl')
            ->willReturn('herbivore.png');
        $dinoArray = [$dinosaurMock, $dinosaurMock, $dinosaurMock];
        $result = Museum::displayAllDinos($dinoArray);
        $expected = '<div class="card m-4"><h2 class="card-title text-center mt-3">test</h2><div class="dino-img-container mx-auto" role="img" aria-label="test photo" style="background-image: url(https://upload.wikimedia.org/wikipedia/commons/thumb/1/16/Maiasaura_skeleton.jpg/220px-Maiasaura_skeleton.jpg);"></div><div class="card-body d-flex flex-column align-items-center"><div class="food-type d-flex flex-row align-items-center"><img width="50px" alt="Icon to represent Herbivore" src="Icons/herbivore.png"/><p class="card-text">Herbivore</p></div><div><a href="displayCase.php?id=1" tabindex="-1"><button class="button" aria-label="View more about test">More info</button></a></div></div></div><div class="card m-4"><h2 class="card-title text-center mt-3">test</h2><div class="dino-img-container mx-auto" role="img" aria-label="test photo" style="background-image: url(https://upload.wikimedia.org/wikipedia/commons/thumb/1/16/Maiasaura_skeleton.jpg/220px-Maiasaura_skeleton.jpg);"></div><div class="card-body d-flex flex-column align-items-center"><div class="food-type d-flex flex-row align-items-center"><img width="50px" alt="Icon to represent Herbivore" src="Icons/herbivore.png"/><p class="card-text">Herbivore</p></div><div><a href="displayCase.php?id=1" tabindex="-1"><button class="button" aria-label="View more about test">More info</button></a></div></div></div><div class="card m-4"><h2 class="card-title text-center mt-3">test</h2><div class="dino-img-container mx-auto" role="img" aria-label="test photo" style="background-image: url(https://upload.wikimedia.org/wikipedia/commons/thumb/1/16/Maiasaura_skeleton.jpg/220px-Maiasaura_skeleton.jpg);"></div><div class="card-body d-flex flex-column align-items-center"><div class="food-type d-flex flex-row align-items-center"><img width="50px" alt="Icon to represent Herbivore" src="Icons/herbivore.png"/><p class="card-text">Herbivore</p></div><div><a href="displayCase.php?id=1" tabindex="-1"><button class="button" aria-label="View more about test">More info</button></a></div></div></div>';
        $this->assertEquals($expected, $result);
    }

    public function testNotDinoDisplayAllDinosaurs()
    {
        $testArray = ['','',''];
        $result = Museum::displayAllDinos($testArray);
        $expected = 'This is not a Dinosaur :(. <br>This is not a Dinosaur :(. <br>This is not a Dinosaur :(. <br>';
        $this->assertEquals($expected, $result);
    }

    public function testNullDisplayAllDinos()
    {
        $testArray = [];
        $result = Museum::displayAllDinos($testArray);
        $expected = "Sorry the Dinosaurs are all extinct :'(";
        $this->assertEquals($expected, $result);
    }

    public function testMalformedDisplayAllDinos()
    {
        $this->expectException(TypeError::class);
        $case = Museum::displayAllDinos('');
    }
}
