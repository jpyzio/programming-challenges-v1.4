<?php

$type = readline("0 - higherLower, 1 - headsTails: ");

if ($type == 0) {
    higherLower();
} elseif ($type == 1) {
    headsTails();
} else {
    exit('Invalid type');
}

function higherLower()
{
    $maxNum = readline("\nType max number: ");
    $randNumber = mt_rand(1, $maxNum);

    for ($i = 0; $i < 10; $i++) {
        $typedNumber = readline("\nType number: ");
        if ($typedNumber == $randNumber) {
            echo "\nYou win!";
            return;
        }
        echo "\nYou typed " . ($typedNumber < $randNumber ? 'smaller' : 'bigger') . ' number';
    }

    echo "\nYou lost...";
}

function headsTails()
{
    $rand = round(microtime(true)) % 2;

    $answer = readline('Head or tails? 0 - head, 1 - tails');

    echo $answer == 0 ? 'You win!' : 'You lost...';

    if (readline('Again? y/n') == 'y') {
        headsTails();
    }
}