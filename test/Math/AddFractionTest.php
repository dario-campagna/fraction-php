<?php

namespace Esteco\Math;

use PHPUnit\Framework\TestCase;

class AddFractionTest extends TestCase
{
    /**
     * @test
     */
    public function zeroPlusZero()
    {
        $this->assertEquals(new Fraction(0), (new Fraction(0))->plus(new Fraction(0)));
    }

    /**
     * @test
     */
    public function negativeIntegers()
    {
        $this->assertEquals(new Fraction(2), (new Fraction(-5))->plus(new Fraction(7)));
    }
}
