<?php

namespace BrainGames\Even;

use function cli\line;
use function cli\prompt;

function generateEvenData()
{
    $question = rand(1, 100);
    $expectedAnswer = $question % 2 ? 'no' : 'yes';
    $result = [$question,$expectedAnswer];
    return $result;
}
