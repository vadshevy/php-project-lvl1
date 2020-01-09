<?php

namespace BrainGames\Calc;
use function BrainGames\Engine\engine;

function runCalcGame()
{
    echo "Welcome to the Brain Games!\n";
    echo "What is the result of the expression?\n";
    engine(generateCalcData());
}

function generateCalcData()
{
    $rounds = 3;
    $result = [];
    for ($i = 0; $i <= $rounds; $i++) {
        $operand1 = rand(1, 100);
        $operand2 = rand(1, 100);
        $operatorsAvailable = array('+','-','*');
        $operator = $operatorsAvailable[array_rand($operatorsAvailable)];
        $question = "{$operand1}{$operator}{$operand2}";
        switch ($operator) {
            case "+":
                $expectedAnswer = (string)($operand1 + $operand2);
                break;
            case "-":
                $expectedAnswer = (string)($operand1 - $operand2);
                break;
            case "*":
                $expectedAnswer = (string)($operand1 * $operand2);
        }
    
        $result[] = $expectedAnswer;
        $result[] = $question;
    }    
    return $result;
}
