<?php
$countries = [
    "Japan" => ["Tokyo", "osaka", "Nagoya"],
    "England" => ["London", "Birmingham", "Glasgow"],
    "France" => ["Paris", "Marseille", "Lyon"]
];
$england = $countries["England"];
for ($i = 0; $i < count($england); $i++) { 
    echo $england[$i] . PHP_EOL;
}
