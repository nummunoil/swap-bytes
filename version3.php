<?php

$bytes = ["AA", "BB", "CC", "DD"];
$pattern = "CDAB";


function alpToIndex($alpha)
{
    $chr = strtolower($alpha);
    return ord($chr)-ord('a');
}

if (count($bytes) != strlen($pattern)) {
    echo 'error';
}

$newArray = [];
for ($i = 0; $i < strlen($pattern); $i++) {
    $alpha = $pattern[$i];
    $index = alpToIndex($alpha);
    $newArray[] = $bytes[$index];
}

echo print_r($newArray, true) . PHP_EOL;
