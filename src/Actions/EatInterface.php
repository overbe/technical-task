<?php

namespace Actions;

/**
 * Interface EatInterface
 */
interface  EatInterface
{
    /**
     * @param string $object
     * @return string
     */
    public function eat(string $object): string;
}