<?php

abstract class Tree
{
    protected int $id;

    public function __construct(int $id)
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }

    abstract public function collectFruits(): array;
}

class AppleTree extends Tree
{
    public function collectFruits(): array
    {
        $fruits = [];
        $fruitCount = rand(40, 50);

        for ($i = 0; $i < $fruitCount; $i++) {
            $fruits[] = new Apple(rand(150, 180));
        }

        return $fruits;
    }
}

class PearTree extends Tree
{
    public function collectFruits(): array
    {
        $fruits = [];
        $fruitCount = rand(0, 20);

        for ($i = 0; $i < $fruitCount; $i++) {
            $fruits[] = new Pear(rand(130, 170));
        }

        return $fruits;
    }
}