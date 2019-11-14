<?php

namespace BrainGames\Progression;

function generateProgressionData()
{
    $progressionLength = 10;
    $progressionStep = rand(1, 10);
    $progressionStart = rand(1, 10);
    $progressionEnd = $progressionStart + $progressionStep * ($progressionLength - 1);
    $progressionSkippedPosition = rand(0, 9);
    $array = range($progressionStart, $progressionEnd, $progressionStep);
    $expectedAnswer = (string)$array[$progressionSkippedPosition];
    $array[$progressionSkippedPosition] = "...";
    $question = implode(" ", $array);

    $result = [$question,$expectedAnswer];
    return $result;
}
