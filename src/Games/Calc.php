<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Engine\gameInteraction;

use const BrainGames\Engine\ROUNDS_COUNT;

const GREETING_TEXT = 'What is the result of the expression?';

function startCalcGame(): void
{
    $gameData = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $firstOperand = rand(0, 50);
        $secondOperand = rand(0, 50);
        $operators = ['+','-','*'];
        $randomOperator = $operators[rand(0, 2)];
        $question = "{$firstOperand} {$randomOperator} {$secondOperand}";
        $gameData[$question] = getCalcAnswer($randomOperator, $firstOperand, $secondOperand);
    };
    gameInteraction(GREETING_TEXT, $gameData);
}

function getCalcAnswer(string $operator, int $firstOperand, int $secondOperand): int
{
    return match ($operator) {
        '+' => $firstOperand + $secondOperand,
        '-' => $firstOperand - $secondOperand,
        '*' => $firstOperand * $secondOperand,
        default => throw new Exception('There is no such operation'),
    };
}
