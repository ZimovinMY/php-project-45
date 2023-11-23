<?php
namespace BrainGames\Games\Calc;

use function BrainGames\Engine\gameInteraction;

function startCalcGame()
{
    $gameGreeting = 'What is the result of the expression?';
    for ($i = 0; $i < 3; $i++) {
        $firstOperand = rand(0, 50);
	$secondOperand = rand(0, 50);
	$operators = ['+','-','*'];
	$randomOperator = $operators[rand(0,2)];
	$question = "{$firstOperand} {$randomOperator} {$secondOperand}";
	switch ($randomOperator) {
	    case '+':
                $answer = $firstOperand + $secondOperand;
                break;
            case '-':
        	$answer = $firstOperand - $secondOperand;
        	break;
    	    case '*':
        	$answer = $firstOperand * $secondOperand;
        	break;
	}
        $gameData[$question] = $answer;
    };
    gameInteraction($gameGreeting, $gameData);
}
