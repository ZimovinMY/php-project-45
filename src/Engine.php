<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;
use function BrainGames\Cli\welcome;

const ROUNDS_COUNT = 3;

function gameInteraction(string $gameGreeting, array $gameData)
{
    $userName = welcome();
    line($gameGreeting);
    foreach ($gameData as $question => $trueAnswer) {
        line("Question: $question");
        $userAnswer = prompt("Your answer");
        if ($userAnswer != $trueAnswer) {
            line("'$userAnswer' is wrong answer ;(. Correct answer was '$trueAnswer'. \nLet's try again, $userName!");
            return;
        }
        line("Correct!");
    }
    line("Congratulations, $userName!");
    return;
}
