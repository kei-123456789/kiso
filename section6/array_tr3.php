<?php
$colors = ["Red", "Green", "Blue"];

// TODO $colorsから"Red"を削除します。

array_splice($colors, 0, 1);

var_dump($colors);