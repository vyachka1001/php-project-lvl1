<?php

namespace Src\Impl\BrainEven;

use function Brain\Games\Src\Output\Controller\writeQuestion;
use function Src\Impl\Generators\getRandomInt;
use function Brain\Games\Src\Output\Controller\getAnswer;
use function Brain\Games\Src\Output\Controller\writeAnswer;
use function Brain\Games\Src\Output\Controller\endGame;

function playRound(): bool
{
    $value = getRandomInt();
    writeQuestion($value);

    $answer = ($value % 2 === 0) ? 'yes' : 'no';
    $userAnswer = getAnswer();

    if ($answer === $userAnswer) {
        writeAnswer(true);
        return true;
    } else {
        writeAnswer(false, $answer, $userAnswer);
        return false;
    }
}

function play($name)
{
    for ($round = 0; $round < 3; $round++) {
        $roundResult = playRound();
        if (!$roundResult) {
            endGame(false, $name);
            return;
        }
    }

    endGame(true, $name);
}
