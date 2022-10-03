<?php
$colors = ["Red", "Green", "Blue"];
for ($i = 0; $i < count($colors); $i++) { 
    $color = $colors[$i];
    $upper_case = strtoupper($color);
    echo $upper_case . PHP_EOL;
}