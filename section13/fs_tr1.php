<?php
$file = "score.txt";
$array = file("score.txt", FILE_IGNORE_NEW_LINES);
echo array_sum($array) . PHP_EOL;