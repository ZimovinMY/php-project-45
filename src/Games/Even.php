<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\gameInteraction;

function startEvenGame()
{
    $gameGreeting = 'Answer "yes" if the number is even, otherwise answer "no".';
    for ($i = 0; $i < 3; $i++) {
        $question = rand(0,100);
        $answer = $question % 2 ? 'no' : 'yes';
        $gameData[$question] = $answer;
    };
    gameInteraction($gameGreeting, $gameData);
}
