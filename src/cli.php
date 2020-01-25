<?php

namespace braingames\cli;

use function cli\line;
use function cli\prompt;

function run()
{
    $name = prompt("May I have your name?");
    line("Hello, %s!", $name);
}
