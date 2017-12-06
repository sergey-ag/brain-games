<?php

namespace BrainGames;

use function \cli\line;

const PARITY_GAME_ROUNDS = 3;
const MIN_NUMBER = 1;
const MAX_NUMBER = 100;

function gameParity()
{
    $questions = [];
    srand();
    for ($i = 1; $i <= PARITY_GAME_ROUNDS; $i = $i + 1) {
        $number = rand(MIN_NUMBER, MAX_NUMBER);
        if ($number % 2 === 0) {
            $questions[] = ['question' => $number, 'answer' => 'yes'];
        } else {
            $questions[] = ['question' => $number, 'answer' => 'no'];
        }
    }
    return $questions;
}

function braingames()
{
    line('Welcome to the Brains Game');
    line('Answer "yes" if number even otherwise answer "no".');
    line();
    $name = \cli\prompt('May I have your name?');
    line('Hello, %s!', $name);
    line();
    $questions = gameParity();
    foreach ($questions as $round) {
        line('Question: %s', $round['question']);
        $userAnswer = \cli\prompt('Your answer: ');
        if ($userAnswer === $round['answer']) {
            line('Correct');
        } else {
            line('\'%s\' is wrong answer ;(. Correct answer was \'%s\'.', $userAnswer, $round['answer']);
            line('Let\'s try again, %s!', $name);
            exit();
        }
    }
    line('Congratulations, %s!', $name);
}
