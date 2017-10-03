<?php

namespace Types;

use Actions\EatInterface;

abstract class Animal implements EatInterface
{

    protected $name;
    protected $type;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function eat(string $food): string
    {
        return $this->getName() . ' ate ' . $food . '!';
    }

}