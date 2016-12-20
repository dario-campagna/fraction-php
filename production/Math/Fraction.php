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
        $this->numerator = $numerator;
        $this->denominator = $denominator;
    }

    /**
     * @param $that
     * @return Fraction
     */
    public function plus($that): Fraction
    {
        return new Fraction($this->numerator + $that->numerator, $this->denominator);
    }

    public function reduce(): Fraction
    {
        if ($this -> numerator % $this->denominator == 0) {
            return new Fraction($this->numerator / $this->denominator);
        } else {
            return $this;
        }
    }

}