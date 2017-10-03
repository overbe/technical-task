<?php

require_once '../vendor/autoload.php';

use Pets\Carp;

use PHPUnit\Framework\TestCase;

class CarpTest extends TestCase
{
    public function testPenguin()
    {
        $carp = new Carp('Jerry');
        $this->assertInstanceOf(Carp::class, $carp);
        $this->assertEquals('Fish', $carp->getType());
        $this->assertEquals('Jerry', $carp->getName());
        $this->assertEquals('Swims like a fish!', $carp->swim());
        $this->assertEquals('Jerry ate small worm!', $carp->eat('small worm'));
        $this->assertEquals('Carp can\'t fly!', $carp->fly());
        $this->assertEquals('Carp can\'t layEggs!', $carp->layEggs());
    }
}