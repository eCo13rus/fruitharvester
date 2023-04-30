<?php

abstract class Fruit
{
    protected int $weight;

    public function __construct(int $weight)
    {
        $this->weight = $weight;
    }

    public function getWeight(): int
    {
        return $this->weight;
    }
}

class Apple extends Fruit
{
}

class Pear extends Fruit
{
}
