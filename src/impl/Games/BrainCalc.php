<?php

namespace Src\Impl\Games\BrainCalc;

use function Src\Impl\Generators\getRandomInt;

function generate(): string
{
    $operationSigns = ['+', '-', '*'];
    $sign = $operationSigns[getRandomInt(0, count($operationSigns) - 1)];
    $operandOne = getRandomInt();
    $operandTwo = getRandomInt();

    return "{$operandOne} {$sign} {$operandTwo}";
}

function countAnswer($expression): string
{
    $values = explode(' ', $expression);
    $signIndex = 1;
    $operandOne = $values[0];
    $operandTwo = $values[2];

    switch ($values[$signIndex]) {
        case '+':
            return $operandOne + $operandTwo;
        case '-':
            return $operandOne - $operandTwo;
        case '*':
            return $operandOne * $operandTwo;
    }
}
