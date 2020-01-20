<?php

namespace BrainGames\Even;

use function BrainGames\Engine\engine;

function runEvenGame()
{
    function isEven($num)
    {
        return $num % 2 ? false : true;
    }

    $generateEvenData = function () {
        $result = [];
        $question = rand(1, 100);
        $expectedAnswer = isEven($question) ? 'yes' : 'no';
        $result[] = $question;
        $result[] = $expectedAnswer;
        return $result;
    };

    $intro = "Answer \"yes\" if the number is even, otherwise answer \"no\".\n";
    engine($generateEvenData, $intro);
}
