<?php

namespace Brain\Games\Cli;

use function cli\line;
use function cli\prompt;

function getUserName(): string
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?', '', ' ', false);
    line("Hello, %s!", $name);
    return $name;
}
