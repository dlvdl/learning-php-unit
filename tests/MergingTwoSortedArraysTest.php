<?php


use PHPUnit\Framework\TestCase;
use App\MergingTwoSortedArrays;

class MergingTwoSortedArraysTest extends TestCase
{
    /**
     * @test
     * @dataProvider checks
     */
    function it_merges_two_arrays($data, $expected)
    {
        list($nums1, $nums2, $m, $n) = $data;

        $this->assertEquals($expected, MergingTwoSortedArrays::merge($nums1, $m, $nums2, $n));
    }

    /**
     * @test
     */
    function it_merges_two_empty_arrays()
    {
        $this->assertEquals([], MergingTwoSortedArrays::merge([], 0, [], 0));
    }

    /**
     * @test
     */
    function it_merges_one_empty_and_one_not_empty_arrays()
    {
        $this->assertEquals([1], MergingTwoSortedArrays::merge([1], 1, [], 0));
    }

    static function checks()
    {
        return [
            [[[], [], 0, 0], []],
            [[[], [1], 0, 1], [1]],
            [[[1, 2, 3], [2, 5, 6], 3, 3], [1, 2, 2, 3, 5, 6]],
        ];

    }
}
