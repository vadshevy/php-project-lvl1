<?php

namespace BrainGames\gcd;

use function BrainGames\engine\engine;

function getGreatestCommonDivisor($num1, $num2)
{
    while ($num1 != $num2) {
        if ($num1 > $num2) {
            $num1 = $num1 - $num2;
        } else {
            $num2 = $num2 - $num1;
        }
    }
    return $num1;
}

function runGCDGame()
{
    $generateGCDData = function () {
        $result = [];
        $num1 = rand(2, 100);
        $num2 = rand(2, 100);
        $question = "{$num1} {$num2}";
        $expectedAnswer = getGreatestCommonDivisor($num1, $num2);
        $result[] = $question;
        $result[] = $expectedAnswer;
        return $result;
    };

    $intro = "Find the greatest common divisor of given numbers.";
    engine($generateGCDData, $intro);
}
