<?php
$scores = [
    ["english" => 90, "math" => 88, "science" => 80],
    ["english" => 64, "math" => 72, "science" => 72],
    ["english" => 90, "math" => 92, "science" => 94]
];
$math_sum = 0;
for ($i = 0; $i < count($scores); $i++) { 
    $math_sum += $scores[$i]["math"];
}
echo $math_sum . PHP_EOL;