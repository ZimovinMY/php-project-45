<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\gameInteraction;

use const BrainGames\Engine\ROUNDS_COUNT;

const GREETING_TEXT = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function startPrimeGame(): void
{
    $gameData = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $question = rand(1, 100);
        $gameData[$question] = getPrimeAnswer($question);
    };
    gameInteraction(GREETING_TEXT, $gameData);
}

function getPrimeAnswer(int $number): string
{
    $answer = 'yes';
    for ($divisor = 2; $divisor <= $number / 2; $divisor++) {
        if ($number % $divisor === 0) {
            $answer = 'no';
        }
    }
    if ($number === 1) {
        $answer = 'no';
    }
    return $answer;
}
