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
    public function __call($methodName, $args) {
        return (new \ReflectionClass($this))->getShortName() .' can\'t ' . $methodName . '!';
    }
}