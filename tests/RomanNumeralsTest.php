<?php


use PHPUnit\Framework\TestCase;
use App\RomanNumerals;

class RomanNumeralsTest extends TestCase
{
    /**
     * @test
     * @dataProvider checks
     */
    function it_generate_the_roman_numeral_for_1($number, $expected)
    {
        $this->assertEquals($expected, RomanNumerals::generate($number));
    }

    /**
     * @test
     */
    function it_cannot_generate_less_than_one()
    {
        $this->assertFalse(RomanNumerals::generate(0));
    }

    /**
     * @test
     */
    function it_cannot_generate_a_roman_numeral_for_more_than_3999()
    {
        $this->assertFalse(RomanNumerals::generate(4000));
    }

    static function checks()
    {
        return [
            [1, 'I'],
            [2, 'II'],
            [3, 'III'],
            [4, 'IV'],
            [5, 'V'],
            [6, 'VI'],
            [7, 'VII'],
            [8, 'VIII'],
            [9, 'IX'],
            [10, 'X'],
            [15, 'XV'],
            [25, 'XXV'],
            [40, 'XL'],
            [50, 'L'],
            [90, 'XC'],
            [100, 'C'],
            [400, 'CD'],
            [500, 'D'],
            [900, 'CM'],
            [1000, 'M'],
        ];

    }
}
