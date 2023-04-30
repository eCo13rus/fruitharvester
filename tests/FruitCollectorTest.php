<?php

require_once __DIR__ . '/../src/FruitCollector.php';
require_once __DIR__ . '/../src/Garden.php';
require_once __DIR__ . '/../src/Tree.php';

use PHPUnit\Framework\TestCase;

class FruitCollectorTest extends TestCase
{
    public function testCollect()
    {
        $garden = new Garden();
        $garden->addTree(new AppleTree(1));
        $garden->addTree(new PearTree(2));

        $fruitCollector = new FruitCollector();
        $collectedFruits = $fruitCollector->collect($garden);

        $this->assertIsArray($collectedFruits['apples']);
        $this->assertIsArray($collectedFruits['pears']);
    }
}