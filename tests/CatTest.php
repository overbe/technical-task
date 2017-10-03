<?php

require_once '../vendor/autoload.php';

use Pets\Cat;

use PHPUnit\Framework\TestCase;

class CatTest extends TestCase
{
    public function testPenguin()
    {
        $cat = new Cat('Tom');
        $this->assertInstanceOf(Cat::class, $cat);
        $this->assertEquals('Mammal', $cat->getType());
        $this->assertEquals('Tom', $cat->getName());
        $this->assertEquals('Tom meows like a cat. Meow, meow, meow!', $cat->meow());
        $this->assertEquals('Tom walks by itself!', $cat->walk());
        $this->assertEquals('Tom ate mouse!', $cat->eat('mouse'));
        $this->assertEquals('Yes it\'s true!', $cat->feedMilk());
        $this->assertEquals('Cat can\'t fly!', $cat->fly());
        $this->assertEquals('Cat can\'t swim!', $cat->swim());
    }
}