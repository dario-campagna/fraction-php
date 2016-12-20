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


}
