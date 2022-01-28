<?php

namespace Src\Impl\Games\BrainProgression;

use function Src\Impl\Generators\getRandomInt;

const PASS_MARKER = "..";
const MIN_INDEX = 1;
const MAX_INDEX = 9;

function generate(): string
{
    $firstEl = getRandomInt();
    $diff = getRandomInt();
    $passIndex = getRandomInt(MIN_INDEX, MAX_INDEX);
    $progression = [$firstEl];

    for ($index = MIN_INDEX; $index < MAX_INDEX + 1; $index++) {
        if ($index === $passIndex) {
            $progression[] = PASS_MARKER;
        } else {
            $progression[] = $firstEl + $index * $diff;
        }
    }

    return implode(' ', $progression);
}

function countAnswer(string $expression): string
{
    $progression = explode(' ', $expression);
    $firstEl = (int)$progression[0];
    $diff = 0;
    $passIndex = 0;
    $index = 1;

    while ($diff === 0 || $passIndex === 0) {
        if ($progression[$index] !== PASS_MARKER && $progression[$index - 1] !== PASS_MARKER) {
            $diff = (int)$progression[$index] - (int)$progression[$index - 1];
        }

        if ($progression[$index] === PASS_MARKER) {
            $passIndex = $index;
        }

        $index++;
    }

    return $firstEl + $passIndex * $diff;
}
