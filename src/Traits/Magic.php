<?php

namespace Traits;

/**
 * Trait Magic
 *
 */
trait Magic
{
    /**
     * @param $methodName
     * @param $args
     * @return string
     */
    public function __call($methodName, $args)
    {
        return $this->getShortName() .' can\'t ' . $methodName . '!';
    }

    /**
     * @return string
     *
     */
    public function getShortName(): string
    {
        return (new \ReflectionClass($this))->getShortName();
    }
}