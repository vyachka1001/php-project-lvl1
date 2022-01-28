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

function countAnswer(string $expression): string
{
    $values = explode(' ', $expression);
    $signIndex = 1;
    $operandOne = (int)$values[0];
    $operandTwo = (int)$values[2];
    $result = 0;

    switch ($values[$signIndex]) {
        case '+':
            $result = $operandOne + $operandTwo;
            break;
        case '-':
            $result = $operandOne - $operandTwo;
            break;
        case '*':
            $result = $operandOne - $operandTwo;
            break;
    }

    return (string)$result;
}
