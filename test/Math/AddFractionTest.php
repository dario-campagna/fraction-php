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
}
