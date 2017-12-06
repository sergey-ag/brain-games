<?php

namespace Craft\BrainGames\Games;

class Calc
{
    public $welcomeMsg = 'What is the result of the expression?';
    public $answer;

    public function __construct()
    {
        srand();
    }

    public function getQuestion()
    {
        $number1 = rand(\Craft\BrainGames\MIN_NUMBER, \Craft\BrainGames\MAX_NUMBER);
        $number2 = rand(\Craft\BrainGames\MIN_NUMBER, \Craft\BrainGames\MAX_NUMBER);
        switch (rand(1, 3)) { // add(1), subtract(2) and multiple(3)
            case 1:
                $this->answer = (string)($number1 + $number2);
                return "$number1 + $number2";
            case 2:
                $this->answer = (string)($number1 - $number2);
                return "$number1 - $number2";
            case 3:
                $this->answer = (string)($number1 * $number2);
                return "$number1 * $number2";
        }
    }
}
