<?php

require_once '../../src/Dinosaur/Dinosaur.php';

use PHPUnit\Framework\TestCase;

// New Class! 🥰

class DinosaurTest extends TestCase {
    public function testGetId () {
        $dinosaur = new DinoApp\Dinosaur\Dinosaur();
        $result = $dinosaur->getId();
    }
}