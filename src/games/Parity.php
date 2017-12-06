<?php

namespace Craft\BrainGames\Games;

class Parity
{
    public $welcomeMsg = 'Answer "yes" if number even otherwise answer "no".';
    public $answer;

    public function __construct()
    {
        srand();
    }

    public function getQuestion()
    {
        $number = rand(\Craft\BrainGames\MIN_NUMBER, \Craft\BrainGames\MAX_NUMBER);
        if ($number % 2 === 0) {
            $this->answer = 'yes';
        } else {
            $this->answer = 'no';
        }
        return $number;
    }
}
