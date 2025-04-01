<?php

namespace App;

class PrimeFactors
{
    public function generate($number)
    {
        $factors = [];

        if ($number > 1) {
            $factors = $this->getFactors($number);
        }

        return $factors;
    }

    public function getFactors($number, $factor=2, &$result = [])
    {
        if ($number < 2) {
            return $result;
        }

        if ($number % $factor === 0) {
            $result[] = $factor;
            $newNumber = $number / $factor;

            return $this->getFactors($newNumber, $factor, $result);
        }

        return $this->getFactors($number, $factor + 1, $result);
    }
}