<?php
function greet($name) {
    return "Heelo $name" . PHP_EOL;
}

$result = greet("Andy");
echo $result;