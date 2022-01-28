<?php

namespace Src\Impl\Controller;

use function Src\Impl\Games\BrainEven\generate as generateEven;
use function Src\Impl\Games\BrainCalc\generate as generateCalc;
use function Src\Impl\Games\BrainGcd\generate as generateGcd;
use function Src\Impl\Games\BrainEven\countAnswer as countEven;
use function Src\Impl\Games\BrainCalc\countAnswer as countCalc;
use function Src\Impl\Games\BrainGcd\countAnswer as countGcd;

function countAnswer($expression, $game)
{
    switch ($game) {
        case 'even':
            return countEven($expression);
        case 'calc':
            return countCalc($expression);
        case 'gcd':
            return countGcd($expression);
    }
}

function generateExpression($game)
{
    switch ($game) {
        case 'even':
            return generateEven();
        case 'calc':
            return generateCalc();
        case 'gcd':
            return generateGcd();
    }
}
