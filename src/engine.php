<?php

namespace BrainGames\Engine;

use function \BrainGames\Even\generateEvenData;
use function \cli\line;
use function \cli\prompt;

function engine($game)
{
    $correctAnswers = 0;
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);    
    while ($correctAnswers < 3) {
        if ($game === 'even'){
        [$question,$expectedAnswer] = generateEvenData();
        }
        line("Question:%s", $question);
        $answer = prompt("Your answer");
        if($answer === $expectedAnswer) {
            line("Correct!");
            $correctAnswers += 1;
        } else {
            line("$answer is wrong answer, correct answer was $expectedAnswer");
            $correctAnswers = 0;
        }
    }
    line("Congratulations, $name!");
}