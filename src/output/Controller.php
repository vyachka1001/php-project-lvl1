<?php

namespace Brain\Games\Src\Output\Controller;

use function cli\line;
use function cli\prompt;

const EVEN_GAME_CONDITION = 'Answer "yes" if the number is even, otherwise answer "no".';
const CALC_GAME_CONDITION = 'What is the result of the expression?';
const GCD_GAME_CONDITION = 'Find the greatest common divisor of given numbers.';
const PROGRESSION_GAME_CONDITION = 'What number is missing in the progression?';
const PRIME_GAME_CONDITION = 'Answer "yes" if given number is prime. Otherwise answer "no".';
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
            break;
        case 'calc':
            line(CALC_GAME_CONDITION);
            break;
        case 'gcd':
            line(GCD_GAME_CONDITION);
            break;
        case 'progression':
            line(PROGRESSION_GAME_CONDITION);
            break;
        case 'prime':
            line(PRIME_GAME_CONDITION);
            break;
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
