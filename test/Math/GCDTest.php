<?php

namespace Esteco\Math;

use PHPUnit\Framework\TestCase;

class GCDTest extends TestCase
{
    /**
     * @test
     */
    public function oneMultipleOfTheOther()
    {
        $this->assertEquals(6, NumberTheory::gcd(6, 24));
    }

    /**
     * @test
     */
    public function relativelyPrime()
    {
        $this->assertEquals(1, NumberTheory::gcd(7, 9));
    }

    /**
     * @test
     */
    public function commonFactor()
    {
        $this->assertEquals(2, NumberTheory::gcd(18, 8));
        $this->assertEquals(4, NumberTheory::gcd(16, -4));
    }

    /**
     * @test
     */
    public function sameArguments()
    {
        $this->assertEquals(2, NumberTheory::gcd(2, 2));
    }

    /**
     * @test
     */
    public function zeroAsArgument()
    {
        $this->assertEquals(2, NumberTheory::gcd(2, 0));
        $this->assertEquals(3, NumberTheory::gcd(0, 3));
        $this->assertEquals(1, NumberTheory::gcd(0, 0));
    }
}
