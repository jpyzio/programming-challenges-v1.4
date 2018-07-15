<?php

$length = readline('Length of name <=10: ');

if ($length > 10 || $length < 3) {
    exit('Invalid length');
}

$letters = [
    '0' => ['a', 'e', 'i', 'o', 'u', 'y'],
    '1' => ['b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'r', 's', 't', 'w', 'z'],
];

$patterns = [
    [1, 0, 0, 1, 1, 0, 1, 1, 0, 1],
    [1, 0, 1, 0, 1, 0, 1, 1, 0, 1],
    [1, 0, 0, 1, 0, 1, 1, 0, 1, 0],
];

$pattern = $patterns[array_rand($patterns)];

$name = '';
for ($i = 0; $i < $length; $i++) {
    $letterType = $pattern[$i];
    $randPosition = array_rand($letters[$letterType]);
    $letter = $letters[$letterType][$randPosition];
    unset($letters[$letterType][$randPosition]);
    $name .= $letter;
}

echo "\n" . ucfirst($name) . "\n";