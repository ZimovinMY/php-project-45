<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\gameInteraction;

use const BrainGames\Engine\ROUNDS_COUNT;

const GREETING_TEXT = 'Answer "yes" if the number is even, otherwise answer "no".';

function start(): void
{
    $gameData = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $question = rand(0, 100);
        $gameData[$question] = isEven($question) ? 'yes' : 'no';
    };
    gameInteraction(GREETING_TEXT, $gameData);
}

function isEven(int $number): bool
{

    return $number % 2 === 0;
}
