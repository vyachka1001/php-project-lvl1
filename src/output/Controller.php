<?php

namespace Brain\Games\Output\Controller;

use function cli\line;

const EVEN_GAME_CONDITION = 'Answer "yes" if the number is even, otherwise answer "no".';

function writeCondition($game)
{
    switch ($game) {
        case 'even':
            line(EVEN_GAME_CONDITION);
    }
}