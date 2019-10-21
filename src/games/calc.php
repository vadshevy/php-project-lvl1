<?php

namespace BrainGames\Calc;

function generateCalcData()
{
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
    $result = [$question,$expectedAnswer];
    return $result;
}
