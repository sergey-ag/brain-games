<?php

namespace Craft\BrainGames;

use function \cli\line;

const ROUNDS = 3;
const MIN_NUMBER = 1;
const MAX_NUMBER = 100;

function brainGame(string $game)
{
    line('Welcome to the Brains Games');
    extract(json_decode($game(), true));
    line($welcomeMsg);
    line();
    $name = \cli\prompt('May I have your name?');
    line('Hello, %s!', $name);
    line();
    $points = 0;
    foreach ($gameQuestions as $item) {
        line('Question: %s', $item['question']);
        $userAnswer = \cli\prompt('Your answer: ');
        if ($userAnswer === $item['answer']) {
            line('Correct');
        } else {
            line('\'%s\' is wrong answer ;(. Correct answer was \'%s\'.', $userAnswer, $item['answer']);
            line('Let\'s try again, %s!', $name);
            exit();
        }
    }
    line('Congratulations, %s!', $name);
}
