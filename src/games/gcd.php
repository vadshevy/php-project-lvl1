<?php

namespace BrainGames\GCD;

use function BrainGames\Engine\engine;

function runGCDGame()
{
    function getGreatestCommonDivisor($num1, $num2)
    {
        while ($num1 != $num2) {
            if ($num1 > $num2) {
                $num1 = $num1 - $num2;
            } else {
                $num2 = $num2 - $num1;
            }
        }
        $expectedAnswer = (string)$num1;
        return $expectedAnswer;
    }

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

    $intro = "Find the greatest common divisor of given numbers.\n";
    engine($generateGCDData, $intro);
}
