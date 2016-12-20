<?php

namespace Esteco\Math;


class AddFractionTest extends \PHPUnit_Framework_TestCase
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
    public function zeroPlusNonZero()
    {
        $this->assertEquals(new Fraction(1), (new Fraction(0))->plus(new Fraction(1)));
    }

    /**
     * @test
     */
    public function nonZeroPlusZero()
    {
        $this->assertEquals(new Fraction(1), (new Fraction(1))->plus(new Fraction(0)));
    }

    /**
     * @test
     */
    public function positiveNonZeroIntegers()
    {
        $this->assertEquals(new Fraction(5), (new Fraction(2))->plus(new Fraction(3)));
    }

    /**
     * @test
     */
    public function negativeIntegers()
    {
        $this->assertEquals(new Fraction(2), (new Fraction(-4))->plus(new Fraction(6)));
        $this->assertEquals(new Fraction(1), (new Fraction(8))->plus(new Fraction(-7)));
        $this->assertEquals(new Fraction(-20), (new Fraction(-11))->plus(new Fraction(-9)));
    }

    /**
     * @test
     */
    public function sameNonTrivialDenominator()
    {
        $this->assertEquals(new Fraction(2, 3), (new Fraction(1, 3))->plus(new Fraction(1,3)));
        $this->assertEquals(new Fraction(1), (new Fraction(1, 2))->plus(new Fraction(1,2)));
        $this->assertEquals(new Fraction(1,2), (new Fraction(3, 8))->plus(new Fraction(1,8)));
    }

    /**
     * @test
     */
    public function differentDenominators()
    {
        $this->assertEquals(new Fraction(5,4), (new Fraction(3, 4))->plus(new Fraction(1,2)));
    }
}
