<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\gameInteraction;

use const BrainGames\Engine\ROUNDS_COUNT;

const GREETING_TEXT = 'What number is missing in the progression?';

function start(): void
{
    $gameData = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $begin = rand(0, 50);
        $step = rand(1, 5);
        $end = $begin + 9 * $step;
        $posMissingNumber = rand(0, 9);
        $progression = range($begin, $end, $step);
        $answer = $progression[$posMissingNumber];
        $progression[$posMissingNumber] = '..';
        $question = implode(' ', $progression);
        $gameData[$question] = $answer;
    };
    gameInteraction(GREETING_TEXT, $gameData);
}
