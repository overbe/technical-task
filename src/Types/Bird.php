<?php

namespace Types;

/**
 * Class Bird
 */
abstract class Bird extends Animal
{
    protected $type = 'Bird';
    /**
     * @return string
     */
    public function layEggs(): string
    {
        return $this->getName() . ' has taken down one more egg!';
    }

}