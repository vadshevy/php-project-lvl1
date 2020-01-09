<?php

namespace BrainGames\Prime;
use function BrainGames\Engine\engine;

function runPrimeGame()
{
    echo "Welcome to the Brain Games!\n";
    echo "Answer \"yes\" if given number is prime. Otherwise answer \"no\".\n";
    engine(generatePrimeData());
}

function isPrime($num)
{
    for ($i = 2; $i <= $num / 2; $i++) {
        if ($num % $i === 0) {
            return "no";
        }
    }
    return "yes";
}

function generatePrimeData()
{
    $rounds = 3;
    $result = [];
    for ($i = 0; $i <= $rounds; $i++) {
        $question = rand(2, 100);
        $expectedAnswer = isPrime($question);
        $result[] = $expectedAnswer;
        $result[] = $question;
    }
    return $result;
}
