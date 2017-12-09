<?php

namespace Craft\BrainGames\Games;

class Progression
{
    const MIN_NUMBER = 1;
    const MAX_NUMBER = 10;
    const PROGRESSION_LENGTH = 10;
    const WELCOME_MSG = 'What number is missing in this progression?';

    public static function game()
    {
        srand();
        
        $start = rand(self::MIN_NUMBER, self::MAX_NUMBER);
        $step = rand(self::MIN_NUMBER, self::MAX_NUMBER);
        $progression = \Craft\Lib\progression($start, $step);
        $hide = rand(1, self::PROGRESSION_LENGTH - 1);
        $answer = $progression[$hide];
        $progression[$hide] = '..';
        return ['question' => implode(' ', $progression), 'answer' => (string)$answer];
    }
}
