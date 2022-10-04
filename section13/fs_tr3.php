<?php
$file = "score.csv";
$array = file($file, FILE_IGNORE_NEW_LINES);
$sum = 0;
for ($i = 0; $i < count($array); $i++) { 
    $num = explode(",", $array[$i]);
    $sum += array_sum($num);
}
echo $sum . PHP_EOL;