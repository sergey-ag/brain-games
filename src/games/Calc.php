<?php

namespace Craft\BrainGames\Games;

class Calc
{
    const MIN_NUMBER = 1;
    const MAX_NUMBER = 100;
    const WELCOME_MSG = 'What is the result of the expression?';

    public static function game()
    {
        srand();
        
        $number1 = rand(self::MIN_NUMBER, self::MAX_NUMBER);
        $number2 = rand(self::MIN_NUMBER, self::MAX_NUMBER);
        switch (rand(1, 3)) { // add(1), subtract(2) and multiple(3)
            case 1:
                return ["question" => "$number1 + $number2", "answer" => (string)($number1 + $number2)];
            case 2:
                return ["question" => "$number1 - $number2", "answer" => (string)($number1 - $number2)];
            case 3:
                return ["question" => "$number1 * $number2", "answer" => (string)($number1 * $number2)];
        }
    }
}
