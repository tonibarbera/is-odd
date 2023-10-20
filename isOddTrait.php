<?php

trait isOddTrait
{
    /**
     * Returns if an integer is Odd or not.
     *
     * @param int $i
     *   The integer.
     *
     * @return bool
     *   The result.
     */
    public function isOdd(int $i): bool
    {
        return (bool) substr(decbin($i), -1);
    }
}
