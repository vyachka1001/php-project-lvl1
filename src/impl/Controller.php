<?php

namespace Src\Impl\Controller;

use function Src\Impl\BrainEven\generate as generateEven;
use function Src\Impl\BrainEven\countAnswer as countEven;

function countAnswer($expression, $game)
{
    switch ($game) {
        case 'even':
            return countEven($expression);
        case 'calc':
            return;
    }
}

function generateExpression($game)
{
    switch ($game) {
        case 'even':
            return generateEven();
        case 'calc':
            return;
    }
}
