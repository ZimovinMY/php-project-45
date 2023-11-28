<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\gameInteraction;

use const BrainGames\Engine\ROUNDS_COUNT;

const GREETING_TEXT = 'Answer "yes" if the number is even, otherwise answer "no".';

function startEvenGame(): void
{
    $gameData = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $question = rand(0, 100);
        $gameData[$question] = getEvenAnswer($question);
    };
    gameInteraction(GREETING_TEXT, $gameData);
}

function getEvenAnswer(int $number): string
{
    return $number % 2 !== 0 ? 'no' : 'yes';
}
