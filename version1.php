<?php

$bytes = ["AA", "BB", "CC", "DD"];
$pattern = "CDAB";


function alpToIndex($alpha)
{
    $alp = strtolower($alpha);
    return strpos("abcdefghijklmnopqrstuvwxyz", $alp);
}

if (count($bytes) != strlen($pattern)) {
    echo 'error';
}

$newArray = [];
foreach (str_split($pattern) as $alpha) {
    $index = alpToIndex($alpha);
    $newArray[] = $bytes[$index];
}

echo print_r($newArray, true) . PHP_EOL;
