<?php

namespace Src\Impl\Generators;

const RAND_INT_MIN = 1;
const RAND_INT_MAX = 100;

function getRandomInt($min = RAND_INT_MIN, $max = RAND_INT_MAX)
{
    return random_int($min, $max);
}
