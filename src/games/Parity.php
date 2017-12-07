<?php

namespace Craft\BrainGames\Games;

function parity()
{
    $welcomeMsg = 'Answer "yes" if number even otherwise answer "no".';
    srand();

    $gameQuestions = [];
    for ($i = 1; $i <= \Craft\BrainGames\ROUNDS; $i = $i + 1) {
        $number = rand(\Craft\BrainGames\MIN_NUMBER, \Craft\BrainGames\MAX_NUMBER);
        if ($number % 2 === 0) {
            $gameQuestions[] = ['question' => $number, 'answer' => 'yes'];
        } else {
            $gameQuestions[] = ['question' => $number, 'answer' => 'no'];
        }
    }
    return ['welcomeMsg' => $welcomeMsg, 'gameQuestions' => $gameQuestions];
}
