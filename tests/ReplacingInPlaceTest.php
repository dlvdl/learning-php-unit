<?php


use App\ReplaceInPlace;
use PHPUnit\Framework\TestCase;
use App\MergingTwoSortedArrays;

class ReplacingInPlaceTest extends TestCase
{
    /**
     * @test
     * @dataProvider checks
     */
    function it_removes_int_from_array($data, $expected)
    {
        list($nums, $val) = $data;
        $expectedLength = ReplaceInPlace::removeElement($nums, $val);

        $nums = array_slice($nums, 0, $expectedLength);

        $this->assertEquals($nums, $expected);
    }


    static function checks()
    {
        return [
            [
                [
                    [3, 2, 2, 3],
                    3
                ],
                [2, 2]
            ],
            [
                [
                    [0, 1, 2, 2, 3, 0, 4, 2],
                    2
                ],
                [0, 1, 4, 0, 3]
            ],
            [
                [
                    [1],
                    1
                ],
                []
            ],
            [
                [
                    [2],
                    3
                ],
                [2]
            ]
        ];
    }
}
