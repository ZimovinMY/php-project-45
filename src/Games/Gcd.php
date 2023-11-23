<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\gameInteraction;

function startGcdGame()
{
    $gameGreeting = 'Find the greatest common divisor of given numbers.';
    $gameData = [];
    for ($i = 0; $i < 3; $i++) {
        $firstNumber = rand(1, 50);
        $secondNumber = rand(1, 50);
        $question = "{$firstNumber} {$secondNumber}";
        $minNumber = min($firstNumber, $secondNumber);
        $answer = 1;
        for ($divisor = 2; $divisor <= $minNumber; $divisor++) {
            if ($firstNumber % $divisor === 0 && $secondNumber % $divisor === 0) {
                $answer = $divisor;
            }
        }
        $gameData[$question] = $answer;
    };
    gameInteraction($gameGreeting, $gameData);
}
