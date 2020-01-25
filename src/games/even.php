<?php

namespace braingames\even;

use function braingames\engine\engine;

function isEven($num)
{
    return $num % 2 ? false : true;
}

function runEvenGame()
{
    $generateEvenData = function () {
        $result = [];
        $question = rand(1, 100);
        $expectedAnswer = isEven($question) ? "yes" : "no";
        $result[] = $question;
        $result[] = $expectedAnswer;
        return $result;
    };

    $intro = "Answer 'yes' if the number is even, otherwise answer 'no'.";
    engine($generateEvenData, $intro);
}
