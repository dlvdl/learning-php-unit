<?php

namespace App;

class ReplaceInPlace
{
    public static function removeElement(&$nums, $val):int {
        $leftPointer = 0;
        $rightPoinddter = count($nums) - 1;

        while ($leftPointer <= $rightPointer) {
            if ($nums[$leftPointer] === $val) {
                self::replaceElement($nums, $leftPointer, $rightPointer, $val);
            }

            $leftPointer++;
        }

        return $rightPointer + 1;
    }

    private static function replaceElement(array &$nums, int $leftPointer, int &$rightPointer, int $val)
    {
        while($rightPointer >= $leftPointer) {
            if ($nums[$rightPointer] !== $val && $nums[$rightPointer] !== null)  {
                $nums[$leftPointer] = $nums[$rightPointer];
                $rightPointer--;
                break;
            }

            $nums[$rightPointer] = null;
            $rightPointer--;
        }
    }
}