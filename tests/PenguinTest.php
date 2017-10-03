<?php

require_once '../vendor/autoload.php';

use Pets\Penguin;

use PHPUnit\Framework\TestCase;

class PenguinTest extends TestCase
{
    public function testPenguin()
    {
        $penguin = new Penguin('Peter');
        $this->assertInstanceOf(Penguin::class, $penguin);
        $this->assertEquals('Bird', $penguin->getType());
        $this->assertEquals('Peter', $penguin->getName());
        $this->assertEquals('Peter swims like a penguin!', $penguin->swim());
        $this->assertEquals('Peter walks on the ice!', $penguin->walk());
        $this->assertEquals('Peter has taken down one more egg!', $penguin->layEggs());
        $this->assertEquals('Peter ate big fish!', $penguin->eat('big fish'));
        $this->assertEquals('Penguin can\'t fly!', $penguin->fly());
        $this->assertEquals('Penguin can\'t wuf!', $penguin->wuf());
    }
}