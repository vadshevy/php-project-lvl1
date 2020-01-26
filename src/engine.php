<?php

namespace BrainGames\engine;

use function cli\line;
use function cli\prompt;

function engine($gameData, $intro)
{
    line("Welcome to the Brain Games!");
    line($intro);
    $name = prompt("May I have your name?");
    line("Hello, %s!", $name);
    $roundsCount = 3;
    for ($i = 1; $i <= $roundsCount; $i++) {
        [$question, $expectedAnswer] = $gameData();
        line("Question:%s", $question);
        $answer = prompt("Your answer");
        if ($answer === (string)$expectedAnswer) {
            line("Correct!");
        } else {
            line("$answer is wrong answer, correct answer was $expectedAnswer");
            line("Let's try again, $name");
            return;
        }
    }
    line("Congratulations, %s!", $name);
}
