<?php


namespace Esteco\Math;


class Fraction
{
    /*
     * @var int
     */
    private $integer;

    /**
     * Fraction constructor.
     * @param int $int
     */
    public function __construct($integer)
    {
        $this->integer = $integer;
    }

    public function plus(Fraction $fraction): Fraction
    {
        if ($fraction->integer == 0) {
            return new Fraction(0);
        } else {
            return new Fraction($this->integer + $fraction->integer);
        }
    }
}