<?php

require_once 'src/Dinosaur/Dinosaur.php';

use DinoApp\Dinosaur\Dinosaur;
use PHPUnit\Framework\TestCase;

// New Class! 🥰

class DinosaurTest extends TestCase {
    public function testConstruct()
    {
        $result = new Dinosaur(1, 'Capybarasaurus', 'Beef Eater', 2.2, 3.3, 4.4, 5, 6, 7, 'capybarasaurus.co.uk');
        $this->assertInstanceOf(Dinosaur::class, $result);
    }
    public function testSuccessGetId()
    {
        $dinosaur = new DinoApp\Dinosaur\Dinosaur(1, 'Capybarasaurus', 'Beef Eater', 2.2, 3.3, 4.4, 5, 6, 7, 'capybarasaurus.co.uk');
        $result = $dinosaur->getId();
        $expected = 1;
        $this->assertEquals($expected, $result);
    }
    public function testMalformedGetId()
    {
        $this->expectException(TypeError::class);
        $case = new DinoApp\Dinosaur\Dinosaur(['potato id'], 'Capybarasaurus', 'Beef Eater', 2.2, 3.3, 4.4, 5, 6, 7, 'capybarasaurus.co.uk');
    }
    public function testSuccessGetSpecies()
    {
        $dinosaur = new DinoApp\Dinosaur\Dinosaur(1, 'Capybarasaurus', 'Beef Eater', 2.2, 3.3, 4.4, 5, 6, 7, 'capybarasaurus.co.uk');
        $result = $dinosaur->getSpecies();
        $expected = 'Capybarasaurus';
        $this->assertEquals($expected, $result);
    }
    public function testMalformedGetSpecies()
    {
        $this->expectException(TypeError::class);
        $case = new DinoApp\Dinosaur\Dinosaur(1, ['Capybarasaurus', 'are', 'the', 'best'], 'Beef Eater', 2.2, 3.3, 4.4, 5, 6, 7, 'capybarasaurus.co.uk');
    }
    public function testSuccessGetFoodType()
    {
        $dinosaur = new DinoApp\Dinosaur\Dinosaur(1, 'Capybarasaurus', 'Beef Eater', 2.2, 3.3, 4.4, 5, 6, 7, 'capybarasaurus.co.uk');
        $result = $dinosaur->getFoodType();
        $expected = 'Beef Eater';
        $this->assertEquals($expected, $result);
    }
    public function testMalformedGetFoodType()
    {
        $this->expectException(TypeError::class);
        $case = new DinoApp\Dinosaur\Dinosaur(1, 'Capybarasaurus', ['Beef Eater', 'Potato Peeler'], 2.2, 3.3, 4.4, 5, 6, 7, 'capybarasaurus.co.uk');
    }
    public function testSuccessGetHeight()
    {
        $dinosaur = new DinoApp\Dinosaur\Dinosaur(1, 'Capybarasaurus', 'Beef Eater', 2.2, 3.3, 4.4, 5, 6, 7, 'capybarasaurus.co.uk');
        $result = $dinosaur->getHeight();
        $expected = 2.2;
        $this->assertEquals($expected, $result);
    }
    public function testMalformedGetHeight()
    {
        $this->expectException(TypeError::class);
        $case = new DinoApp\Dinosaur\Dinosaur(1, 'Capybarasaurus', 'Beef Eater', ['These potatoes be magnificent'], 3.3, 4.4, 5, 6, 7, 'capybarasaurus.co.uk');
    }
    public function testSuccessGetWeight()
    {
        $dinosaur = new DinoApp\Dinosaur\Dinosaur(1, 'Capybarasaurus', 'Beef Eater', 2.2, 3.3, 4.4, 5, 6, 7, 'capybarasaurus.co.uk');
        $result = $dinosaur->getWeight();
        $expected = 3.3;
        $this->assertEquals($expected, $result);
    }
    public function testMalformedGetWeight()
    {
        $this->expectException(TypeError::class);
        $case = new DinoApp\Dinosaur\Dinosaur(1, 'Capybarasaurus', 'Beef Eater', 2.2, ['Nova is the best dog'], 4.4, 5, 6, 7, 'capybarasaurus.co.uk');
    }
    public function testSuccessGetLength()
    {
        $dinosaur = new DinoApp\Dinosaur\Dinosaur(1, 'Capybarasaurus', 'Beef Eater', 2.2, 3.3, 4.4, 5, 6, 7, 'capybarasaurus.co.uk');
        $result = $dinosaur->getLength();
        $expected = 4.4;
        $this->assertEquals($expected, $result);
    }
    public function testMalformedGetLength()
    {
        $this->expectException(TypeError::class);
        $case = new DinoApp\Dinosaur\Dinosaur(1, 'Capybarasaurus', 'Beef Eater', 2.2, 3.3, ['Mr Scrum a Lord'], 5, 6, 7, 'capybarasaurus.co.uk');
    }
    public function testSuccessGetKillerRating()
    {
        $dinosaur = new DinoApp\Dinosaur\Dinosaur(1, 'Capybarasaurus', 'Beef Eater', 2.2, 3.3, 4.4, 5, 6, 7, 'capybarasaurus.co.uk');
        $result = $dinosaur->getKillerRating();
        $expected = 5;
        $this->assertEquals($expected, $result);
    }
    public function testMalformedGetKillerRating()
    {
        $this->expectException(TypeError::class);
        $case = new DinoApp\Dinosaur\Dinosaur(1, 'Capybarasaurus', 'Beef Eater', 2.2, 3.3, 4.4,  ['Capybara Canvas; draw your dreams today!'], 6, 7, 'capybarasaurus.co.uk');
    }
    public function testSuccessGetIntelligence()
    {
        $dinosaur = new DinoApp\Dinosaur\Dinosaur(1, 'Capybarasaurus', 'Beef Eater', 2.2, 3.3, 4.4, 5, 6, 7, 'capybarasaurus.co.uk');
        $result = $dinosaur->getIntelligence();
        $expected = 6;
        $this->assertEquals($expected, $result);
    }
    public function testMalformedGetIntelligence()
    {
        $this->expectException(TypeError::class);
        $case = new DinoApp\Dinosaur\Dinosaur(1, 'Capybarasaurus', 'Beef Eater', 2.2, 3.3, 4.4, 5, ['All hail the Google Overlord'], 7, 'capybarasaurus.co.uk');
    }
    public function testSuccessGetAge()
    {
        $dinosaur = new DinoApp\Dinosaur\Dinosaur(1, 'Capybarasaurus', 'Beef Eater', 2.2, 3.3, 4.4, 5, 6, 7, 'capybarasaurus.co.uk');
        $result = $dinosaur->getAge();
        $expected = 7;
        $this->assertEquals($expected, $result);
    }
    public function testMalformedGetAge()
    {
        $this->expectException(TypeError::class);
        $case = new DinoApp\Dinosaur\Dinosaur(1, 'Capybarasaurus', 'Beef Eater', 2.2, 3.3, 4.4, 5, 6, ['How much wood...'], 'capybarasaurus.co.uk');
    }
    public function testSuccessGetImageUrl()
    {
        $dinosaur = new DinoApp\Dinosaur\Dinosaur(1, 'Capybarasaurus', 'Beef Eater', 2.2, 3.3, 4.4, 5, 6, 7, 'capybarasaurus.co.uk');
        $result = $dinosaur->getImageUrl();
        $expected = 'capybarasaurus.co.uk';
        $this->assertEquals($expected, $result);
    }
    public function testMalformedGetImageUrl()
    {
        $this->expectException(TypeError::class);
        $case = new DinoApp\Dinosaur\Dinosaur(1, 'Capybarasaurus', 'Beef Eater', 2.2, 3.3, 4.4, 5, 6, 7, ['I love Albies Bagels']);
    }
}