<?php
namespace Types;

use Actions\SwimInterface;
use Traits\Swim;

/**
 * Class Fish
 */
abstract class Fish extends Animal implements SwimInterface
{
    protected $type = 'Fish';

    use Swim;
}