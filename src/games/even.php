<?php

namespace BrainGames\Even;
use function BrainGames\Engine\engine;

function generateEvenData()
{
    echo "Welcome to the Brain Games!\n";
    echo "Answer \"yes\" if the number is even, otherwise answer \"no\".\n";
    function isEven($num)
    {
    return $num % 2 ? 'no' : 'yes';
    }

    $correctAnswersCount = 0;
    while($correctAnswersCount < 3) {
    $question = rand(1, 100);
    $expectedAnswer = isEven($question);
    engine($question, $expectedAnswer);
    }
}
