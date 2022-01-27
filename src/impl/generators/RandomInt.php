<?php

namespace Src\Impl\Generators;

const RAND_INT_MIN = 1;
const RAND_INT_MAX = 100;

function getRandomInt()
{
    return random_int(RAND_INT_MIN, RAND_INT_MAX);
}
