<?php


namespace Esteco\Math;


class Fraction
{
    /**
     * @var int
     */
    private $integer;

    /**
     * Fraction constructor.
     * @param int $integer
     */
    public function __construct($integer)
    {
        $this->integer = $integer;
    }

    /**
     * @param $fraction
     * @return Fraction
     */
    public function plus($fraction): Fraction
    {
        if ($this->integer == 0) {
            return $fraction;
        } else {
            return new Fraction(0);
        }
    }
}