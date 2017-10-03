<?php

namespace Pets;

use Actions\MeowInterface;
use Actions\WalkInterface;
use Traits\Magic;
use Types\Mammal;

/**
 * Class Cat
 */
class Cat extends Mammal implements MeowInterface, WalkInterface
{
    use Magic;

    /**
     * @return string
     */
    public function meow(): string
    {
        return $this->getName() . ' meows like a cat. Meow, meow, meow!';
    }

    /**
     * @return string
     */
    public function walk(): string
    {
        return $this->getName() . ' walks by itself!';
    }
}