<?php

namespace Src\Impl\Controller;

use function Src\Impl\BrainEven\generate as generateEven;
use function Src\Impl\BrainCalc\generate as generateCalc;
use function Src\Impl\BrainEven\countAnswer as countEven;
use function Src\Impl\BrainCalc\countAnswer as countCalc;

function countAnswer($expression, $game)
{
    switch ($game) {
        case 'even':
            return countEven($expression);
        case 'calc':
            return countCalc($expression);
    }
}

function generateExpression($game)
{
    switch ($game) {
        case 'even':
            return generateEven();
        case 'calc':
            return generateCalc();
    }
}
