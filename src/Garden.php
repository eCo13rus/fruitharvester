<?php

class Garden
{
    private array $trees = [];

    public function addTree(Tree $tree): void
    {
        $this->trees[] = $tree;
    }

    public function getTrees(): array
    {
        return $this->trees;
    }
}