<?php

namespace braingames\progression;

use function braingames\engine\engine;

function runProgressionGame()
{
    $generateProgressionData = function () {
        $result = [];
        $progressionLength = 10;
        $progressionStep = rand(1, 10);
        $progressionStart = rand(1, 10);
        $progressionEnd = $progressionStart + $progressionStep * ($progressionLength - 1);
        $progressionSkippedPosition = rand(0, $progressionLength - 1);
        $progression = range($progressionStart, $progressionEnd, $progressionStep);
        $expectedAnswer = $progression[$progressionSkippedPosition];
        $progression[$progressionSkippedPosition] = "...";
        $question = implode(" ", $progression);
        $result[] = $question;
        $result[] = $expectedAnswer;
        return $result;
    };

    $intro =  "What number is missing in the progression?";
    engine($generateProgressionData, $intro);
}
