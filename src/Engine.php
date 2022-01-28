<?php

namespace Src\Engine;

use function Brain\Games\Src\Output\Controller\writeQuestion;
use function Brain\Games\Src\Output\Controller\getAnswer;
use function Brain\Games\Src\Output\Controller\writeAnswer;
use function Brain\Games\Src\Output\Controller\endGame;
use function Src\Impl\Controller\countAnswer;
use function Src\Impl\Controller\generateExpression;

function playRound($game): bool
{
    $expression = generateExpression($game);
    writeQuestion($expression);

    $answer = countAnswer($expression, $game);
    $userAnswer = getAnswer();

    if ($answer === $userAnswer) {
        writeAnswer(true);
        return true;
    } else {
        writeAnswer(false, $answer, $userAnswer);
        return false;
    }
}

function play($name, $game)
{
    for ($round = 0; $round < 3; $round++) {
        $roundResult = playRound($game);
        if (!$roundResult) {
            endGame(false, $name);
            return;
        }
    }

    endGame(true, $name);
}
