<?php
function repeat($word, $num) {
    $result = "";
    for ($i = 0; $i < $num; $i++) { 
        $result = $result . $word;
    }
    return $result;
}

$hello2 = repeat("Hello", 2);
echo $hello2 . PHP_EOL;

$world3 = repeat("World", 3);
echo $world3 . PHP_EOL;