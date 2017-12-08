<?php

namespace Craft\Lib;

function gcd(int $a, int $b)
{
    if ($b > $a) {
        $temp = $a;
        $a = $b;
        $b = $temp;
    }
    $func = function (int $a, int $b) use (&$func) {
        if ($a % $b === 0) {
            return $b;
        }
        if ($a % $b > $b) {
            return $func($a % $b, $b);
        }
        return $func($b, $a % $b);
    };
    return $func($a, $b);
}
