<?php

require_once __DIR__ . '/../src/Garden.php';
require_once __DIR__ . '/../src/Tree.php';

use PHPUnit\Framework\TestCase;

class GardenTest extends TestCase
{
    public function testAddTree()
    {
        $garden = new Garden();
        $garden->addTree(new AppleTree(1));
        $garden->addTree(new PearTree(2));

        $trees = $garden->getTrees();
        $this->assertCount(2, $trees);
        $this->assertInstanceOf(AppleTree::class, $trees[0]);
        $this->assertInstanceOf(PearTree::class, $trees[1]);
    }
}