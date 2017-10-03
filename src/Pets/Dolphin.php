<?php

namespace Pets;

use Actions\SwimInterface;
use Traits\Magic;
use Types\Mammal;
use Traits\Swim;

/**
 * Class Dolphin
 */
class Dolphin extends Mammal implements SwimInterface
{
    use Swim, Magic;
}