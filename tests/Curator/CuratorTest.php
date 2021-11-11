<?php
require_once 'src/Curator/Curator.php';

use DinoApp\Curator\Curator;
use PHPUnit\Framework\TestCase;

class CuratorTest extends TestCase {
    public function testConstruct()
    {
       $result = new Curator();
        $this->assertInstanceOf(Curator::class, $result);
    }
    public function testSuccessSetSqlLimit()
    {
        $curator = new Curator();
        $result = $curator->setSqlLimit();
        $expected = 'LIMIT 0, 8';
        $this->assertEquals($expected, $result);
    }

    public function testSuccessGetPageNumber()
    {
        $curator = new Curator();
        $result = $curator->getPageNumber();
        $expected = 1;
        $this->assertEquals($expected, $result);
    }

    public function testSuccessGetSqlLimit()
    {
        $curator = new Curator();
        $result = $curator->getSqlLimit();
        $expected = 'LIMIT 0, 8';
        $this->assertEquals($expected, $result);
    }

    public function testSuccessGetSTotalPages()
    {
        $curator = new Curator();
        $result = $curator->getTotalPages();
        $expected = 1;
        $this->assertEquals($expected, $result);
    }

    public function testSuccessGetShowAll()
    {
        $curator = new Curator();
        $result = $curator->getShowAll();
        $expected = false;
        $this->assertEquals($expected, $result);
    }

    public function testSuccessSetTotalPages()
    {
        $this->markTestSkipped(
            'Function interacts with database and cannot be unit tested'
        );
    }

    public function testMalformedSetTotalPages()
    {
        $this->expectException(TypeError::class);
        $case = new DinoApp\Curator\Curator();
        $case->setTotalPages('Ellie smells');
    }

    public function testSuccessCalcTotalPages()
    {
        $this->markTestSkipped(
            'Function interacts with database and cannot be unit tested'
        );
    }
    public function testMalformedCalcTotalPages()
    {
        $this->expectException(TypeError::class);
        $case = new DinoApp\Curator\Curator();
        $case->calcTotalPages('Ellie smells');
    }
}