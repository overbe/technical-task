<?php

namespace Pets;

use Actions\SwimInterface;
use Actions\WalkInterface;
use Types\Bird;
use Traits\Magic;

/**
 * Class Penguin
 */
class Penguin extends Bird implements SwimInterface, WalkInterface
{
    use Magic;

    /**
     * @return string
     */
    public function swim(): string
    {
        return $this->getName() . ' swims like a penguin!';
    }

    /**
     * @return string
     */
    public function walk(): string
    {
        return $this->getName() . ' walks on the ice!';
    }

}