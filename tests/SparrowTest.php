<?php

require_once '../vendor/autoload.php';

use Pets\Sparrow;

use PHPUnit\Framework\TestCase;

class SparrowTest extends TestCase
{
    public function testPenguin()
    {
        $aparrow = new Sparrow('Jack');
        $this->assertInstanceOf(Sparrow::class, $aparrow);
        $this->assertEquals('Bird', $aparrow->getType());
        $this->assertEquals('Jack', $aparrow->getName());
        $this->assertEquals('Jack flies like a bird!', $aparrow->fly());
        $this->assertEquals('Jack walks on the roofs!', $aparrow->walk());
        $this->assertEquals('Tweet, tweet, tweet!', $aparrow->tweet());
        $this->assertEquals('Jack ate bug!', $aparrow->eat('bug'));
        $this->assertEquals('Jack has taken down one more egg!', $aparrow->layEggs());
        $this->assertEquals('Sparrow can\'t swim!', $aparrow->swim());
    }
}