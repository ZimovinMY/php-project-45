<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\gameInteraction;

function startPrimeGame()
{
    $gameGreeting = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    for ($i = 0; $i < 3; $i++) {
        $question = rand(1, 100);
        $answer = 'yes';
        for ($divisor = 2; $divisor <= $question / 2; $divisor++) {
            if ($question % $divisor === 0) {
                $answer = 'no';
            }
        }
        $gameData[$question] = $answer;
    };
    gameInteraction($gameGreeting, $gameData);
}
