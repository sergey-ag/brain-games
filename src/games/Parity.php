<?php

namespace Craft\BrainGames\Games;

class Parity
{
    const MIN_NUMBER = 1;
    const MAX_NUMBER = 100;
    const WELCOME_MSG = 'Answer "yes" if number even otherwise answer "no".';

    public static function game()
    {
        srand();
    
        $number = rand(self::MIN_NUMBER, self::MAX_NUMBER);
        if ($number % 2 === 0) {
            return ['question' => $number, 'answer' => 'yes'];
        }
        return $gameQuestions[] = ['question' => $number, 'answer' => 'no'];
    }
}
