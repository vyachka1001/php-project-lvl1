<?php

namespace Src\Impl\Controller;

use function Src\Impl\Games\BrainEven\generate as generateEven;
use function Src\Impl\Games\BrainCalc\generate as generateCalc;
use function Src\Impl\Games\BrainGcd\generate as generateGcd;
use function Src\Impl\Games\BrainProgression\generate as generateProgression;
use function Src\Impl\Games\BrainPrime\generate as generatePrime;
use function Src\Impl\Games\BrainPrime\countAnswer as countPrime;
use function Src\Impl\Games\BrainProgression\countAnswer as countProgression;
use function Src\Impl\Games\BrainEven\countAnswer as countEven;
use function Src\Impl\Games\BrainCalc\countAnswer as countCalc;
use function Src\Impl\Games\BrainGcd\countAnswer as countGcd;

function countAnswer(string $expression, string $game)
{
    switch ($game) {
        case 'even':
            return countEven($expression);
        case 'calc':
            return countCalc($expression);
        case 'gcd':
            return countGcd($expression);
        case 'progression':
            return countProgression($expression);
        case 'prime':
            return countPrime($expression);
    }
}

function generateExpression(string $game)
{
    switch ($game) {
        case 'even':
            return generateEven();
        case 'calc':
            return generateCalc();
        case 'gcd':
            return generateGcd();
        case 'progression':
            return generateProgression();
        case 'prime':
            return generatePrime();
    }
}
