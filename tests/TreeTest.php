<?php

require_once __DIR__ . '/../src/Tree.php';

use PHPUnit\Framework\TestCase;

class TreeTest extends TestCase
{
    public function testAppleTreeId()
    {
        $appleTree = new AppleTree(1);
        $this->assertEquals(1, $appleTree->getId());
    }

    public function testPearTreeId()
    {
        $pearTree = new PearTree(2);
        $this->assertEquals(2, $pearTree->getId());
    }
}