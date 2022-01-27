<?php

namespace Brain\Games\Output\Controller;

use function cli\line;

const EVEN_GAME_CONDITION = 'Answer "yes" if the number is even, otherwise answer "no".';
const QUESTION_STR = "Question: ";

function writeCondition($game)
{
    switch ($game) {
        case 'even':
            line(EVEN_GAME_CONDITION);
    }
}

function writeQuestion($question)
{
    line(QUESTION_STR . $question);
}
