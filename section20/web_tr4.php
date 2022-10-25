<?php
$num_x = (int)filter_input(INPUT_POST, "x");
$num_y = (int)filter_input(INPUT_POST, "y");
$sum = $num_x + $num_y;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP Sample</title>
</head>
<body>
    <h3>Calc</h3>
    <hr>
    <p>
    <?php echo $num_x . " + " . $num_y . " = " . $sum; ?>
    </p>
</body>
</html>
