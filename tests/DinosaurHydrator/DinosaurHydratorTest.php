<?php

require_once 'src/DinosaurHydrator/DinosaurHydrator.php';

use PHPUnit\Framework\TestCase;
use DinoApp\DinosaurHydrator\DinosaurHydrator;

class DinosaurHydratorTest extends TestCase {
    public function testConstruct()
    {
        $result = new DinosaurHydrator();
        $this->assertInstanceOf(DinosaurHydrator::class, $result);
    }
    public function testGetAllDinos()
    {
        $this->markTestSkipped(
            'Function interacts with database and cannot be unit tested'
        );
    }
    public function testGetDino()
    {
        $this->markTestSkipped(
            'Function interacts with database and cannot be unit tested'
        );
    }
}
