<?php

namespace BrainGames\Engine;
/*
use function BrainGames\Even\generateEvenData;
use function BrainGames\Calc\generateCalcData;
use function BrainGames\GCD\generateGCDData;
use function BrainGames\Progression\generateProgressionData;
use function BrainGames\Prime\generatePrimeData;
*/
use function cli\line;
use function cli\prompt;

function engine($gameData)
{
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    $correctAnswers = 0;
    while ($correctAnswers < 3) {
        $question = array_pop($gameData);
        $expectedAnswer = array_pop($gameData);
        
        line("Question:%s", $question);
        $answer = prompt("Your answer");
        if ($answer === $expectedAnswer) {
            line("Correct!");
            $correctAnswers += 1;
        } else {
            line("$answer is wrong answer, correct answer was $expectedAnswer");
            line("Let's try again, $name");
            return;
        }
    }
    line("Congratulations, $name!");
}
