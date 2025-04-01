<?php


use App\CheckPalindrome;
use PHPUnit\Framework\TestCase;

class SummaryRangeTest extends TestCase
{
    /**
     * @test
     * @dataProvider checks
     */
    function it_finds_ranges($data, $expected)
    {
        $this->assertEquals($expected, \App\SummaryRanges::find($data));
    }


    static function checks()
    {
        return [
            [
                [0,1,2,4,5,7],
                ["0->2","4->5","7"]
            ],
            [
                [0,2,3,4,6,8,9],
                ["0","2->4","6","8->9"]
            ],
            [
                [],
                []
            ],
            [
                [3],
                [3]
            ],
            [
                [-3],
                [-3]
            ]
        ];
    }
}
