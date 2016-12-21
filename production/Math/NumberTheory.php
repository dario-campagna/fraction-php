<?php

namespace Esteco\Math;

class NumberTheory
{
    public static function gcd($a, $b): int
    {
        while ($b != 0) {
            $t = $b;
            $b = $a % $b;
            $a = $t;
        }
        return $a != 0 ? abs($a) : 1;
    }
}