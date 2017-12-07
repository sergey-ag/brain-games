<?php

namespace Craft\BrainGames\Games;

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

function gcdGame()
{
    $welcomeMsg = 'Find the greatest common divisor of given numbers.';
    srand();
    
    $gameQuestions = [];
    for ($i = 1; $i <= \Craft\BrainGames\ROUNDS; $i = $i + 1) {
        $number1 = rand(\Craft\BrainGames\MIN_NUMBER, \Craft\BrainGames\MAX_NUMBER);
        $number2 = rand(\Craft\BrainGames\MIN_NUMBER, \Craft\BrainGames\MAX_NUMBER);
        $gameQuestions[] = ['question' => "$number1 $number2", 'answer' => (string)(gcd($number1, $number2))];
    }
    return ['welcomeMsg' => $welcomeMsg, 'gameQuestions' => $gameQuestions];
}
