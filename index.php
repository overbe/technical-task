<?php
require_once 'vendor/autoload.php';

use Pets\Penguin;
use Pets\Dolphin;
use Pets\Cat;
use Pets\Sparrow;

$penguin = new Penguin('Sparky');
$dolphin = new Dolphin('Flipper');
$cat = new Cat('Tomas');
$sparrow = new Sparrow('Tiki');

echo $penguin->fly() . "\n";
echo $penguin->fly();


