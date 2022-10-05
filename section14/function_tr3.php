<?php
function search($array, $num) {
    for ($i = 0; $i < count($array); $i++) { 
        if ($num === $array[$i]) {
            return true;
        }
    }
    return false;
}

$scores = [90, 72, 58, 80, 66, 50];
$target = (int)$argv[1];

$found = search($scores, $target);
if ($found === true) {
    echo "Found" . PHP_EOL;
} else {
    echo "Not Found" . PHP_EOL;
}