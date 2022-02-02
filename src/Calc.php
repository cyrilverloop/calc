<?php

declare(strict_types=1);

namespace CyrilVerloop\Calc;

/**
 * A calculator.
 */
class Calc
{
    // Methods :

    /**
     * Adds two integers.
     * @return int the addition of two integers.
     */
    public function add(int $a, int $b): int
    {
        return $a + $b;
    }
}
