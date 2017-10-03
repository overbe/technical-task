<?php

namespace Pets;

use Actions\ByteInterface;
use Actions\RunInterface;
use Actions\WalkInterface;
use Actions\WufInterface;
use Traits\Magic;
use Types\Mammal;

/**
 * Class Dog
 */
class Dog extends Mammal implements WufInterface, WalkInterface, RunInterface, ByteInterface
{
    use Magic;

    /**
     * @return string
     */
    public function wuf(): string
    {
        return $this->getName() . ' barks as a dog!';
    }

    /**
     * @return string
     */
    public function walk(): string
    {
        return $this->getName() . ' walks with the owner!';
    }

    /**
     * @return string
     */
    public function run(): string
    {
        return $this->getName() . ' runs faster than light!';
    }

    /**
     * @param string $object
     * @return string
     */
    public function byte(string $object): string
    {
        return $this->getName() . ' has bitten ' . $object . '!';
    }
}