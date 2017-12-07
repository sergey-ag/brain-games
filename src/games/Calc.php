<?php

namespace Craft\BrainGames\Games;

function calc()
{
    $welcomeMsg = 'What is the result of the expression?';
    srand();
    
    $gameQuestions = [];
    for ($i = 1; $i <= \Craft\BrainGames\ROUNDS; $i = $i + 1) {
        $number1 = rand(\Craft\BrainGames\MIN_NUMBER, \Craft\BrainGames\MAX_NUMBER);
        $number2 = rand(\Craft\BrainGames\MIN_NUMBER, \Craft\BrainGames\MAX_NUMBER);
        switch (rand(1, 3)) { // add(1), subtract(2) and multiple(3)
            case 1:
                $gameQuestions[] = ["question" => "$number1 + $number2", "answer" => (string)($number1 + $number2)];
                break;
            case 2:
                $gameQuestions[] = ["question" => "$number1 - $number2", "answer" => (string)($number1 - $number2)];
                break;
            case 3:
                $gameQuestions[] = ["question" => "$number1 * $number2", "answer" => (string)($number1 * $number2)];
                break;
        }
    }
    return json_encode(['welcomeMsg' => $welcomeMsg, 'gameQuestions' => $gameQuestions]);
}
