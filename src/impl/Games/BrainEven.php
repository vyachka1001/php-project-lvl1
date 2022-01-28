<?php

namespace Src\Impl\Games\BrainEven;

use function Src\Impl\Generators\getRandomInt;

function generate(): int
{
    return getRandomInt();
}

function countAnswer($expression)
{
    return ($expression % 2 === 0) ? 'yes' : 'no';
}
