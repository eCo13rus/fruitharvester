<?php 

require_once 'Fruit.php';
require_once 'Tree.php';
require_once 'Garden.php';
require_once 'FruitCollector.php';

$garden = new Garden();

for ($i = 1; $i <= 10; $i++) {
    $garden->addTree(new AppleTree($i));
}

for ($i = 11; $i <= 25; $i++) {
    $garden->addTree(new PearTree($i));
}

$fruitCollector = new FruitCollector();
$collectedFruits = $fruitCollector->collect($garden);

$appleCount = count($collectedFruits['apples']);
$pearCount = count($collectedFruits['pears']);
$appleWeight = array_reduce($collectedFruits['apples'], fn($sum, $apple) => $sum + $apple->getWeight(), 0);
$pearWeight = array_reduce($collectedFruits['pears'], fn($sum, $pear) => $sum + $pear->getWeight(), 0);

echo "Собрано яблок: {$appleCount}, общий вес: {$appleWeight} гр<br>";
echo "Собрано груш: {$pearCount}, общий вес: {$pearWeight} гр<br>";
