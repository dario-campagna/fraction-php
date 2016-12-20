<?php

namespace Math;


use Esteco\Math\Fraction;
use PHPUnit\Framework\TestCase;

class ReduceFractionTest extends TestCase
{

    /**
     * @test
     */
    public function noReduction()
    {
        $this->assertEquals(new Fraction(1), (new Fraction(1))->reduce());
        $this->assertEquals(new Fraction(1, 2), (new Fraction(1, 2))->reduce());
    }

    /**
     * @test
     */
    public function reduceToIntegers()
    {
        $this->assertEquals(new Fraction(2), (new Fraction(6, 3))->reduce());
    }

    /**
     * @test
     */
    public function reduceToLowestTerms()
    {
        $this->assertEquals(new Fraction(1,4), (new Fraction(6, 24))->reduce());
    }
}
