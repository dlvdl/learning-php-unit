<?php

namespace App;

class CheckPalindrome
{
    public static function isPalindrome(string $string): bool
    {
        $parsedString = strtolower($string);
        $parsedString = preg_replace('/[^a-zA-Z0-9]/', "", $parsedString);

        return $parsedString === strrev($parsedString);
    }
}