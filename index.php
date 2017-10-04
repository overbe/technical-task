<?php

require_once 'vendor/autoload.php';

use Pets\{Cat, Dog, Dolphin, Carp, Penguin, Sparrow};

$animals = [
    new Cat('Tom'),
    new Dog('Spike'),
    new Dolphin('Flipper'),
    new Penguin('Lolo'),
    new Carp('Majestic'),
    new Sparrow('Captain Jack'),
];

$result = [];

foreach ($animals as $animal) {

    $result[] = $animal->getName() . ' a ' . $animal->getShortName() . ', and he is a ' .  $animal->getType();
    $result[] = $animal->woof();
    $result[] = $animal->walk();
    $result[] = $animal->byte('someone');
    $result[] = $animal->meow();
    $result[] = $animal->run();
    $result[] = $animal->tweet();
    $result[] = $animal->swim();
    $result[] = $animal->fly();
    $result[] = $animal->feedMilk();
    $result[] = $animal->layEggs();
    $result[] = $animal->eat('food');
    $result[] = ' ';
}

echo implode("<br />", array_filter($result));


