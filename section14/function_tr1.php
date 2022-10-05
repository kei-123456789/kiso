<?php
function duble($x) {
    return $x * 2;
}

$scores = [90, 72, 58];
for ($i = 0; $i < count($scores); $i++) { 
    $score = $scores[$i];
    echo duble($score) . PHP_EOL;
}