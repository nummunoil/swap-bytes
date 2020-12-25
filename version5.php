<?php

$bytes = ["AA", "BB", "CC", "DD"];
$pattern = "CDAB";


if (count($bytes) != strlen($pattern)) {
    echo 'error';
}

$newArray = [];
for ($i = 0; $i < strlen($pattern); $i++) {
    $alpha = $pattern[$i];
    $index = ord($alpha)-ord('A');
    $newArray[] = $bytes[$index];
}

echo print_r($newArray, true) . PHP_EOL;
