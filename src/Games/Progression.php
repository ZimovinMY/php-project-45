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
        $posMissingNumber = rand(0, 9);
        $progression = getProgression($begin, $step, $posMissingNumber);
        $answer = match ($posMissingNumber) {
            0 => $progression[$posMissingNumber + 1] - $step,
            default => $progression[$posMissingNumber - 1] + $step,
        };
        $question = implode(' ', $progression);
        $gameData[$question] = $answer;
    };
    gameInteraction(GREETING_TEXT, $gameData);
}

function getProgression(int $begin, int $step, int $posMissingNumber): array
{
    $progression = [];
    for ($i = 0; $i <= 9; $i += 1) {
        if ($i === $posMissingNumber) {
            $progression[] = '..';
        } else {
            $progression[] = $begin + $step * $i;
        }
    }
    return $progression;
}
