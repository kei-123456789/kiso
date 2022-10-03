<?php
$score = ["english" => 90, "math" => 88, "science" => 80];
// $sum = $score["english"] + $score["math"] + $score["science"];
// echo $sum . PHP_EOL;
$total = 0;
foreach ($score as $key => $value) {
    $total += $value;
}
echo $total . PHP_EOL;