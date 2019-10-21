<?php

namespace BrainGames\Even;

function generateEvenData()
{
    $question = rand(1, 100);
    $expectedAnswer = $question % 2 ? 'no' : 'yes';
    $result = [$question,$expectedAnswer];
    return $result;
}
