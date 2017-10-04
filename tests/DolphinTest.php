<?php

require_once '../vendor/autoload.php';

use Pets\Dolphin;

use PHPUnit\Framework\TestCase;

class DolphinTest extends TestCase
{
    public function testPenguin()
    {
        $dolphin = new Dolphin('Flipper');
        $this->assertInstanceOf(Dolphin::class, $dolphin);
        $this->assertEquals('Mammal', $dolphin->getType());
        $this->assertEquals('Flipper', $dolphin->getName());
        $this->assertEquals('Swims like a fish!', $dolphin->swim());
        $this->assertEquals('Flipper ate small fish!', $dolphin->eat('small fish'));
        $this->assertEquals('Feeds his children with a milk!', $dolphin->feedMilk());
        $this->assertEquals('Dolphin can\'t fly!', $dolphin->fly());
        $this->assertEquals('Dolphin can\'t layEggs!', $dolphin->layEggs());
    }
}