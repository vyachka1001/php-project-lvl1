<?php

namespace Src\Impl\Games\BrainGcd;

use function Src\Impl\Generators\getRandomInt;

function generate(): string
{
    $operandOne = getRandomInt();
    $operandTwo = getRandomInt();

    return $operandOne . ' ' . $operandTwo;
}

function gcd(int $operandOne, int $operandTwo)
{
    while ($operandOne > 0 && $operandTwo > 0)
    {
        if ($operandOne > $operandTwo) {
            $operandOne %= $operandTwo;
        } else {
            $operandTwo %= $operandOne;
        }
    }

    return $operandOne + $operandTwo;
}

function countAnswer($expression): string
{
    $values = explode(' ', $expression);
    [$operandOne, $operandTwo] = $values;
    return gcd($operandOne, $operandTwo);
}
