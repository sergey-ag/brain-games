<?php

namespace BrainGames;

const MIN_NUMBER = 1;
const MAX_NUMBER = 100;

use function \cli\line;

function parity()
{
    line('Welcome to the Brains Game');
    line('Answer "yes" if number even otherwise answer "no".');
    line();
    $name = \cli\prompt('May I have your name?');
    line('Hello, %s!', $name);
    line();
    srand();
    for ($i = 1; $i <= 3; $i = $i + 1) {
        $number = rand(MIN_NUMBER, MAX_NUMBER);
        if ($number % 2 === 0) {
            $correctAnswer = 'yes';
        } else {
            $correctAnswer = 'no';
        }
        line('Question: %s', $number);
        $answer = \cli\prompt('Your answer: ');
        if ($answer === $correctAnswer) {
            line('Correct');
        } else {
            line('\'%s\' is wrong answer ;(. Correct answer was \'%s\'.', $answer, $correctAnswer);
            line('Let\'s try again, %s!', $name);
            exit();
        }
    }
    line('Congratulations, %s!', $name);
}
