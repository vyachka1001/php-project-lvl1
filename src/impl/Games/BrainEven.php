<?php

namespace Src\Impl\Games\BrainEven;

use function Src\Impl\Generators\getRandomInt;

function generate(): int
{
    return getRandomInt();
}

function countAnswer(string $expression)
{
    return ((int)$expression % 2 === 0) ? 'yes' : 'no';
}
