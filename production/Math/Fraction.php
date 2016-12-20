<?php


namespace Esteco\Math;


class Fraction
{
    /**
     * @var int
     */
    private $integer;
    /**
     * @var int
     */
    private $denominator;

    /**
     * Fraction constructor.
     * @param int $integer
     * @param int $denominator
     */
    public function __construct($integer, $denominator = 1)
    {
        $this->integer = $integer;
        $this->denominator = $denominator;
    }

    /**
     * @param $fraction
     * @return Fraction
     */
    public function plus($fraction): Fraction
    {
        return new Fraction($this->integer + $fraction->integer, $this->denominator);
    }
}