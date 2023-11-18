<?php
namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;
use function BrainGames\Cli\welcome;

function gameInteraction(string $userName, string $gameGreeting, array $gameData)
{
    line($gameGreeting);
    foreach ($gameData as $question => $trueAnswer) {
        line("Question: $question");
        $userAnswer = prompt("Your answer");
        if ($userAnswer === $trueAnswer) {
            line("Correct!");
        } else {
            line("'$userAnswer' is wrong answer ;(. Correct answer was '$trueAnswer'. \nLet's try again, $userName!");
            return;
        }
    }
    line("Congratulations, $userName!");
    return;
}

function startEvenGame()
{
    $userName = welcome();
    $gameGreeting = 'Answer "yes" if the number is even, otherwise answer "no".';
    for ($i = 0; $i < 3; $i++) {
        $question = rand(0,100);
        $answer = $question % 2 ? 'no' : 'yes';
        $gameData[$question] = $answer;
    };
    gameInteraction($userName, $gameGreeting, $gameData);
}
