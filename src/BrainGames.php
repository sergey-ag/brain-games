<?php

namespace Craft\BrainGames;

use function \cli\line;

const POINTS_TO_WIN = 3;
const MIN_NUMBER = 1;
const MAX_NUMBER = 100;

function brainGame(string $game)
{
    line('Welcome to the Brains Games');
    $brainGame = new $game();
    line($brainGame->welcomeMsg);
    line();
    $name = \cli\prompt('May I have your name?');
    line('Hello, %s!', $name);
    line();
    $points = 0;
    while ($points < POINTS_TO_WIN) {
        line('Question: %s', $brainGame->getQuestion());
        $userAnswer = \cli\prompt('Your answer: ');
        if ($userAnswer === $brainGame->answer) {
            line('Correct');
            $points = $points + 1;
        } else {
            line('\'%s\' is wrong answer ;(. Correct answer was \'%s\'.', $userAnswer, $brainGame->answer);
            line('Let\'s try again, %s!', $name);
            exit();
        }
    }
    line('Congratulations, %s!', $name);
}
