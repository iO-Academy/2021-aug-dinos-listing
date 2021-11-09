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
        $expected = '<div><h2>test</h2><div><img src="' . $url .'"/></div><div><div><img src="Icons/herbivore.png"/><div>Herbivore</div></div><button>More</button></div></div><div><h2>test</h2><div><img src="' . $url .'"/></div><div><div><img src="Icons/herbivore.png"/><div>Herbivore</div></div><button>More</button></div></div><div><h2>test</h2><div><img src="' . $url .'"/></div><div><div><img src="Icons/herbivore.png"/><div>Herbivore</div></div><button>More</button></div></div>';
        $this->assertEquals($expected, $result);
    }

    public function testMalformedDisplayAllDinos()
    {
        $this->expectException(TypeError::class);
        $case = Museum::displayAllDinos('');
    }
}
