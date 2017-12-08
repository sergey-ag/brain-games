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

function sumOfDigits(int $num)
{
    $result = 0;
    $length = strlen((string)$num);
    for ($i = 0; $i < $length; $i = $i + 1) {
        $result = $result + (int)((string)$num)[$i];
    }
    return $result;
}

function balanceNumber(int $num)
{
    $digitsSum = sumOfDigits($num);
    $digitsQty = strlen((string)$num);
    $base = floor($digitsSum / $digitsQty);
    $unbalanced = $digitsSum % $digitsQty;
    return (int)str_pad('', $digitsQty, (string)$base) + (int)str_pad('', $unbalanced, '1');
}
