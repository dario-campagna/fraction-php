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
}
