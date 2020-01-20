<?php

namespace BrainGames\Prime;

use function BrainGames\Engine\engine;

function runPrimeGame()
{
    function isPrime($num)
    {
        if ($num < 2) {
            return false;
        }
        for ($i = 2; $i <= $num / 2; $i++) {
            if ($num % $i === 0) {
                return false;
            }
        }
        return true;
    }

    $generatePrimeData = function () {
        $result = [];
        $question = rand(2, 100);
        $expectedAnswer = isPrime($question) ? 'yes' : 'no';
        $result[] = $question;
        $result[] = $expectedAnswer;
        return $result;
    };

    $intro = "Answer \"yes\" if given number is prime. Otherwise answer \"no\".\n";
    engine($generatePrimeData, $intro);
}
