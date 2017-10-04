<?php

require_once '../vendor/autoload.php';

use Pets\Dog;

use PHPUnit\Framework\TestCase;

class DogTest extends TestCase
{
    public function testPenguin()
    {
        $dog = new Dog('Spike');
        $this->assertInstanceOf(Dog::class, $dog);
        $this->assertEquals('Mammal', $dog->getType());
        $this->assertEquals('Spike', $dog->getName());
        $this->assertEquals('Spike barks as a dog!', $dog->wuf());
        $this->assertEquals('Spike walks with the owner!', $dog->walk());
        $this->assertEquals('Spike runs faster than light!', $dog->run());
        $this->assertEquals('Spike has bitten cat!', $dog->byte('cat'));
        $this->assertEquals('Spike ate bone!', $dog->eat('bone'));
        $this->assertEquals('Feeds his children with a milk!', $dog->feedMilk());
        $this->assertEquals('Dog can\'t fly!', $dog->fly());
        $this->assertEquals('Dog can\'t tweet!', $dog->tweet());
    }
}