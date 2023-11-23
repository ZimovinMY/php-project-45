<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\gameInteraction;

function startProgressionGame()
{
    $gameGreeting = 'What number is missing in the progression?';
    for ($i = 0; $i < 3; $i++) {
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
    gameInteraction($gameGreeting, $gameData);
}
