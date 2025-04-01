<?php


use App\CheckPalindrome;
use PHPUnit\Framework\TestCase;

class CheckPalindromeTest extends TestCase
{
    /**
     * @test
     * @dataProvider checks
     */
    function it_checksPalindrome($data, $expected)
    {
        $this->assertEquals($expected, CheckPalindrome::isPalindrome($data));
    }


    static function checks()
    {
        return [
            [
                'A man, a plan, a canal: Panama',
                true
            ],
            [
                ' ',
                true
            ],
            [
                'race a car',
                false
            ]
        ];
    }
}
