<?php

namespace Craft\BrainGames\Games;

class Prime
{
    const MIN_NUMBER = 1;
    const MAX_NUMBER = 100;
    const WELCOME_MSG = 'Answer "yes" if number prime otherwise answer "no".';

    public static function game()
    {
        srand();
        
        $number = rand(self::MIN_NUMBER, self::MAX_NUMBER);
        if (\Craft\Lib\isPrime($number)) {
            return ['question' => $number, 'answer' => 'yes'];
        }
        return $gameQuestions[] = ['question' => $number, 'answer' => 'no'];
    }
}
