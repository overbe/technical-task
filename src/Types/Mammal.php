<?php

namespace Types;

use Actions\FeedMilkInterface;

/**
 * Class Mammal
 */
abstract class Mammal extends Animal implements FeedMilkInterface
{
    protected $type = 'Mammal';
    /**
     * @return string
     */
    public function feedMilk(): string
    {
        return 'Yes it\'s true!';
    }

}