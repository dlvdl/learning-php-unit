<?php

namespace App;

class SummaryRanges
{
    public static function find($nums)
    {
        $rangeHash = [];
        $rangeStart = '' . $nums[0];
        $rangeEnd = '';

        if (count($nums) < 1) {
            return [];
        }

        for ($i = 0; $i < count($nums) - 1; $i++) {
            if (($nums[$i + 1] - $nums[$i]) > 1) {
                if ($rangeEnd !== '') {
                    if ($rangeStart !== $rangeEnd) {
                        $rangeHash[]= $rangeStart . '->' . $rangeEnd;
                    } else {
                        $rangeHash[]= $rangeStart;
                    }
                }

                if ($rangeEnd === '') {
                    $rangeHash[] = '' . $rangeStart;
                }

                $rangeStart = '' . $nums[$i + 1];
            }

            $rangeEnd = '' . $nums[$i + 1];
        }

        if ($rangeStart === $rangeEnd) {
            $rangeHash[] = $rangeStart;
        }

        if ($rangeEnd !== '' && ($rangeStart !== $rangeEnd)) {
            $rangeHash[] = $rangeStart . '->' . $rangeEnd;
        }

        if ($rangeEnd === '' && ($rangeStart !== $rangeEnd)) {
            $rangeHash[] = $rangeStart;
        }

        return $rangeHash;
    }
}