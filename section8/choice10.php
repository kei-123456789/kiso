<?php
$names = ["Andy", "Betty", "Carol"];

for ($i = 0; $i < count($names); $i++) { 
    if ($names[$i] != "Andy") {
        echo "Hello ";
        echo $names[$i] . PHP_EOL; 
    }
}