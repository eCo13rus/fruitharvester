<?php

require_once __DIR__ . '/../src/Fruit.php';

use PHPUnit\Framework\TestCase;

class FruitTest extends TestCase
{
    public function testAppleWeight()
    {
        $apple = new Apple(160);
        $this->assertEquals(160, $apple->getWeight());
    }

    public function testPearWeight()
    {
        $pear = new Pear(140);
        $this->assertEquals(140, $pear->getWeight());
    }
}