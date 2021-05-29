<?php
namespace ProducerTest;
use Lottery\Producers;
use PHPUnit\Framework\TestCase;

class ProducerTest extends TestCase
{
    public function testGetNumGroup()
    {
        $obj = new Producers();
        $numberGroup = $obj->getNumGroup();
        $this->assertTrue($numberGroup['blue']>0);
        $this->assertTrue(in_array($numberGroup['blue'],Producers::BLUE_NUM));
        $this->assertTrue(count($numberGroup['red'])==6);
    }
}