<?php

namespace Math;


use Esteco\Math\Fraction;
use PHPUnit\Framework\TestCase;

class ReduceFractionTest extends TestCase
{

    /**
     * @test
     */
    public function integer()
    {
        $this->assertEquals(new Fraction(1), (new Fraction(1))->reduce());
    }

    /**
     * @test
     */
    public function alreadyReducedFraction()
    {
        $this->assertEquals(new Fraction(1, 2), (new Fraction(1, 2))->reduce());
    }
}
