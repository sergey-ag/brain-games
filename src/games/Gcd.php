<?php

namespace Craft\BrainGames\Games;

class Gcd
{
    const MIN_NUMBER = 1;
    const MAX_NUMBER = 100;
    const WELCOME_MSG = 'Find the greatest common divisor of given numbers.';

    public static function game()
    {
        srand();
        
        $number1 = rand(self::MIN_NUMBER, self::MAX_NUMBER);
        $number2 = rand(self::MIN_NUMBER, self::MAX_NUMBER);
        return ['question' => "$number1 $number2", 'answer' => (string)(\Craft\Lib\gcd($number1, $number2))];
    }
}
