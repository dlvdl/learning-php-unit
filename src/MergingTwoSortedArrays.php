<?php

namespace App;

class MergingTwoSortedArrays
{
    static function merge($nums1, $m, $nums2, $n)
    {
        if ($m === 0 && $n === 0) {
            return [];
        }

        foreach ($nums2 as $num) {
            $nums1[] = $num;
        }

        sort($nums1);

        return $nums1;
    }

    static function freeSpaceInArray(&$nums1, $start) {
        if ($start > count($nums1)) {
            $nums1[$start] = 0;

            return;
        }

        $end = count($nums1) - 1;
        $nums1[] = 0;

        for ($i = $end; $i > $start; $i--) {
            $nums1[$i + 1] = $nums1[$i];
        }
    }
}