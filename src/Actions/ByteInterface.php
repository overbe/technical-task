<?php

namespace Actions;

/**
 * Interface ByteInterface
 */
interface  ByteInterface
{
    /**
     * @param string $object
     * @return string
     */
    public function byte(string $object): string;
}