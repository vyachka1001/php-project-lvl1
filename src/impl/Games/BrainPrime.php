<?php

namespace Src\Impl\Games\BrainPrime;

use function Src\Impl\Generators\getRandomInt;

function generate(): string
{
    return getRandomInt();
}

function isPrime(int $number)
{
    if ($number === 2) {
        return true;
    }

    if ($number < 2) {
        return false;
    }

    for ($i = 2, $middle = floor(sqrt($number)); $i <= $middle; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}

function countAnswer($expression): string
{
    return isPrime((int)$expression) ? 'yes' : 'no';
}
