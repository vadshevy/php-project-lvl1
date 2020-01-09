<?php

namespace BrainGames\GCD;
use function BrainGames\Engine\engine;

function runGCDGame()
{
    echo "Welcome to the Brain Games!\n";
    echo "Find the greatest common divisor of given numbers.\n";
    engine(generateGCDData());
}

function getGreatestCommonDivisor($num1,$num2)
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

function generateGCDData()
{
    $rounds = 3;
    $result = [];
    for ($i = 0; $i <= $rounds; $i++) {
        $num1 = rand(1, 100);
        $num2 = rand(1, 100);
        $question = "{$num1} {$num2}";
        $expectedAnswer = getGreatestCommonDivisor($num1,$num2);
        $result[] = $expectedAnswer;
        $result[] = $question;
    }
    return $result;
}
