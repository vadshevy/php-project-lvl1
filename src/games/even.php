<?php

namespace BrainGames\Even;

use function BrainGames\Engine\engine;

function runEvenGame()
{
    echo "Welcome to the Brain Games!\n";
    echo "Answer \"yes\" if the number is even, otherwise answer \"no\".\n";
    engine(generateEvenData());
}

function generateEvenData()
{
    function isEven($num)
    {
        return $num % 2 ? 'no' : 'yes';
    }

    $rounds = 3;
    $result = [];
    for ($i = 0; $i <= $rounds; $i++) {
        $question = rand(1, 100);
        $expectedAnswer = isEven($question);
        $result[] = $expectedAnswer;
        $result[] = $question;
    }
    return $result;
}
