<?php

namespace BrainGames\Calc;

function generateGCDData()
{
    $num1 = rand(1, 100);
    $num2 = rand(1, 100);
    $question = "{$num1} {$num2}";
    while ($num1 != $num2) {
        if ($num1 > $num2) {
            $num1 = $num1 - $num2;
        }
        else {
            $num2 = $num2 - $num1;
        }
    }
    $expectedAnswer = (string)$num1;
    $result = [$question,$expectedAnswer];
    return $result;
}