<?php

namespace Pets;

use Actions\SwimInterface;
use Traits\Magic;
use Traits\Swim;
use Types\Fish;

class Carp extends Fish implements SwimInterface
{
    use Swim, Magic;
}