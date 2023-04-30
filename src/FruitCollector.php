<?php

class FruitCollector
{
    public function collect(Garden $garden): array
    {
        $collectedFruits = [
            'apples' => [],
            'pears' => []
        ];

        foreach ($garden->getTrees() as $tree) {
            if ($tree instanceof AppleTree) {
                $collectedFruits['apples'] = array_merge($collectedFruits['apples'], $tree->collectFruits());
            } elseif ($tree instanceof PearTree) {
                $collectedFruits['pears'] = array_merge($collectedFruits['pears'], $tree->collectFruits());
            }
        }

        return $collectedFruits;
    }
}