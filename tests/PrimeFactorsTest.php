<?php


use App\PrimeFactors;
use PHPUnit\Framework\TestCase;

class PrimeFactorsTest extends TestCase
    {
     /**
      * @test
      * @dataProvider factors
     */
    function its_generates_prime_factors_for_1($number, $expected)
    {
        $factors = new PrimeFactors();

        $this->assertEquals($expected, $factors->generate($number));
    }

    static function factors()
    {
        return [
            [1, []],
            [2, [2]],
            [3, [3]],
            [4, [2, 2]],
            [6, [2, 3]],
            [8, [2, 2, 2]],
            [25, [5, 5]],
            [100, [2, 2, 5, 5]],
            [999, [3, 3, 3, 37]],
        ];
    }
}
