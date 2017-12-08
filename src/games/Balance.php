<?php

namespace Craft\BrainGames\Games;

class Balance
{
    const MIN_NUMBER = 1;
    const MAX_NUMBER = 9999;
    const WELCOME_MSG = 'Balance the given number.';

    public static function game()
    {
        srand();
        
        $number = rand(self::MIN_NUMBER, self::MAX_NUMBER);
        return ['question' => "$number", 'answer' => (string)(\Craft\Lib\balanceNumber($number))];
    }
}
