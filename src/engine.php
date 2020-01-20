<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function engine($gameData, $intro)
{
    $greeting = "Welcome to the Brain Games!\n";
    print_r($greeting);
    print_r($intro);
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
#    $correctAnswers = 0;
    $rounds = 3;
    for ($i = 1; $i <= $rounds; $i++) {
        [$question, $expectedAnswer] = $gameData();
        line("Question:%s", $question);
        $answer = prompt("Your answer");
        if ($answer === $expectedAnswer) {
            line("Correct!");
#            $correctAnswers += 1;
        } else {
            line("$answer is wrong answer, correct answer was $expectedAnswer");
            line("Let's try again, $name");
            return;
        }
    }
    line("Congratulations, %s!", $name);
}
