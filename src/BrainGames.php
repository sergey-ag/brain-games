<?php

namespace Craft\BrainGames;

use function \cli\line;

const ROUNDS = 3;

function brainGame(string $game)
{
    line('Welcome to the Brains Games');
    line($game::WELCOME_MSG);
    line();
    $name = \cli\prompt('May I have your name?');
    line('Hello, %s!', $name);
    line();
    for ($i = 1; $i <= ROUNDS; $i = $i + 1) {
        $gameData = $game::game();
        line('Question: %s', $gameData['question']);
        $userAnswer = \cli\prompt('Your answer: ');
        if ($userAnswer === $gameData['answer']) {
            line('Correct');
        } else {
            line('\'%s\' is wrong answer ;(. Correct answer was \'%s\'.', $userAnswer, $gameData['answer']);
            line('Let\'s try again, %s!', $name);
            exit();
        }
    }
    line('Congratulations, %s!', $name);
}
