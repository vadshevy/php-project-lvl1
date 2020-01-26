<?php

namespace BrainGames\calc;

use function BrainGames\engine\engine;

function runCalcGame()
{
    $generateCalcData = function () {
        $result = [];
        $operand1 = rand(1, 100);
        $operand2 = rand(1, 100);
        $operators = ["+","-","*"];
        $operator = $operators[array_rand($operators)];
        $question = "{$operand1}{$operator}{$operand2}";
        switch ($operator) {
            case '+':
                $expectedAnswer = ($operand1 + $operand2);
                break;
            case '-':
                $expectedAnswer = ($operand1 - $operand2);
                break;
            case '*':
                $expectedAnswer = ($operand1 * $operand2);
        }
        $result[] = $question;
        $result[] = $expectedAnswer;
        return $result;
    };

    $intro = "What is the result of the expression?";
    engine($generateCalcData, $intro);
}
