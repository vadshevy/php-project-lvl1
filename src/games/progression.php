<?php

namespace BrainGames\Progression;

use function BrainGames\Engine\engine;

function runProgressionGame()
{
    echo "Welcome to the Brain Games!\n";
    echo "What number is missing in the progression?\n";
    engine(generateProgressionData());
}



function generateProgressionData()
{
    $rounds = 3;
    $result = [];
    for ($i = 0; $i <= $rounds; $i++) {
        $progressionLength = 10;
        $progressionStep = rand(1, 10);
        $progressionStart = rand(1, 10);
        $progressionEnd = $progressionStart + $progressionStep * ($progressionLength - 1);
        $progressionSkippedPosition = rand(0, $progressionLength - 1);
        $array = range($progressionStart, $progressionEnd, $progressionStep);
        $expectedAnswer = (string)$array[$progressionSkippedPosition];
        $array[$progressionSkippedPosition] = "...";
        $question = implode(" ", $array);
        $result[] = $expectedAnswer;
        $result[] = $question;
    }
    return $result;
}
