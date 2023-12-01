<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\gameInteraction;
use const BrainGames\Engine\ROUNDS_COUNT;

const GREETING_TEXT = 'Find the greatest common divisor of given numbers.';

function start(): void
{
    $gameData = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $firstNumber = rand(1, 50);
        $secondNumber = rand(1, 50);
        $question = "{$firstNumber} {$secondNumber}";
        $gameData[$question] = getGcdAnswer($firstNumber, $secondNumber);
    };
    gameInteraction(GREETING_TEXT, $gameData);
}

function getGcdAnswer(int $firstNumber, int $secondNumber): int
{
    $minNumber = min($firstNumber, $secondNumber);
    $answer = 1;
    for ($divisor = 2; $divisor <= $minNumber; $divisor++) {
        if ($firstNumber % $divisor === 0 && $secondNumber % $divisor === 0) {
            $answer = $divisor;
        }
    }
    return $answer;
}
