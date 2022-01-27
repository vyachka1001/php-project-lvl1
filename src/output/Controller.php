<?php

namespace Brain\Games\Src\Output\Controller;

use function cli\line;
use function cli\prompt;

const EVEN_GAME_CONDITION = 'Answer "yes" if the number is even, otherwise answer "no".';
const QUESTION_STR = "Question: ";
const ANSWER_STR = "Your answer";
const CORRECT_ANSWER_OUTPUT = 'Correct!';
const VICTORY_END_STR = "Congratulations, ";
const DEFEAT_END_STR = "Let's try again, ";

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

function getAnswer(): string
{
    $answer = prompt(ANSWER_STR);
    return $answer;
}

function writeAnswer($isCorrect, $correctAnswer = '', $userAnswer = '')
{
    if ($isCorrect) {
        line(CORRECT_ANSWER_OUTPUT);
    } else {
        line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'");
    }
}

function endGame($isVictory, $name)
{
    if ($isVictory) {
        line(VICTORY_END_STR . $name . "!");
    } else {
        line(DEFEAT_END_STR . $name . "!");
    }
}
