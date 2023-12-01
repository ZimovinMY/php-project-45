<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\gameInteraction;

use const BrainGames\Engine\ROUNDS_COUNT;

const GREETING_TEXT = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function start(): void
{
    $gameData = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $question = rand(1, 100);
        $gameData[$question] = isPrime($question) ? 'yes' : 'no';
    };
    gameInteraction(GREETING_TEXT, $gameData);
}

function isPrime(int $number): bool
{
    if ($number === 1) {
        return false;
    }
    for ($divisor = 2; $divisor <= $number / 2; $divisor++) {
        if ($number % $divisor === 0) {
            return false;
        }
    }
    return true;
}
