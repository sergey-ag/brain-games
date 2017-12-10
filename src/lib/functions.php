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

function progression(int $first, int $step, int $length = 10)
{
    $result[] = $first;
    for ($i = 1; $i < $length; $i = $i + 1) {
        $result[] = $result[$i - 1] + $step;
    }
    return $result;
}

function isPrime(int $num)
{
    $func = function (int $divisor) use ($num, &$func) {
        if ($divisor === 1) {
            return true;
        }
        if ($num % $divisor === 0) {
            return false;
        }
        return $func($divisor - 1);
    };
    return $func((int)floor(sqrt($num)));
}
