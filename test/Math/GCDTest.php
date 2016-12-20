<?php

namespace Math;


use PHPUnit\Framework\TestCase;

class GCDTest extends TestCase
{
    private function gcd($a, $b): int
    {
        while ($b != 0) {
            $t = $b;
            $b = $a % $b;
            $a = $t;
        }
        return $a;
    }

    /**
     * @test
     */
    public function oneMultipleOfTheOther()
    {
        $this->assertEquals(6, $this->gcd(6, 24));
    }

    /**
     * @test
     */
    public function relativelyPrime()
    {
        $this->assertEquals(1, $this->gcd(7, 9));
    }

    /**
     * @test
     */
    public function commonFactor()
    {
        $this->assertEquals(2, $this->gcd(18, 8));
    }

    /**
     * @test
     */
    public function sameArguments()
    {
        $this->assertEquals(2, $this->gcd(2, 2));
    }
}
