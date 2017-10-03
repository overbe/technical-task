<?php

namespace Pets;

use Actions\FlyInterface;
use Actions\TweetInterface;
use Actions\WalkInterface;
use Traits\Magic;
use Types\Bird;

/**
 * Class Penguin
 */
class Sparrow extends Bird implements FlyInterface, WalkInterface, TweetInterface
{
    use Magic;

    /**
     * @return string
     */
    public function fly(): string
    {
        return $this->getName() . ' flies like a bird!';
    }

    /**
     * @return string
     */
    public function walk(): string
    {
        return $this->getName() . ' walks on the roofs!';
    }

    /**
     * @return string
     */
    public function tweet(): string
    {
        return 'Tweet, tweet, tweet!';
    }


}