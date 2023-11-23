<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\gameInteraction;

function startGcdGame()
{
    $gameGreeting = 'Find the greatest common divisor of given numbers.';
    for ($i = 0; $i < 3; $i++) {
	$firstNumber = rand(1, 50);
        $secondNumber = rand(1, 50);
	$question = "{$firstNumber} {$secondNumber}";
	$minNumber = min($firstNumber,$secondNumber);
        for ($divisor = 1; $divisor <= $minNumber; $divisor++) {
	    if ($firstNumber % $divisor === 0 && $secondNumber % $divisor === 0) {
		$answer = $divisor;
	    }
	}
        $gameData[$question] = $answer;
    };
    gameInteraction($gameGreeting, $gameData);
}
