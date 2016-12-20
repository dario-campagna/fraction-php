<?php


namespace Esteco\Math;


class Fraction
{
    /**
     * @var int
     */
    private $numerator;
    /**
     * @var int
     */
    private $denominator;

    /**
     * Fraction constructor.
     * @param int $numerator
     * @param int $denominator
     */
    public function __construct($numerator, $denominator = 1)
    {
        $gcd = NumberTheory::gcd($numerator, $denominator);
        $this->numerator = $numerator / $gcd;
        $this->denominator = $denominator / $gcd;
    }

    /**
     * @param $that
     * @return Fraction
     */
    public function plus($that): Fraction
    {
        return new Fraction($this->numerator + $that->numerator, $this->denominator);
    }

}