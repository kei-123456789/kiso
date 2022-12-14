<?php
$fp = fopen("scores.csv", "r");
$scores = [];
$line = fgetcsv($fp);
while ($line !== false) {
    $scores[] = $line;
    $line = fgetcsv($fp);
}
fclose($fp);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP Scores</title>
</head>
<body>
    <h3>Scores</h3>
    <hr>
    <table border="1">
        <tr>
            <th>Subject</th>
            <th>Name</th>
            <th>Score</th>
        </tr>
        <?php for ($i = 0; $i < count($scores); $i++) { ?>
        <tr>
            <td><?php echo htmlspecialchars($scores[$i][0], ENT_QUOTES); ?></td>
            <td><?php echo htmlspecialchars($scores[$i][1], ENT_QUOTES); ?></td>
            <td><?php echo htmlspecialchars($scores[$i][2], ENT_QUOTES); ?></td>
        </tr>      
        <?php } ?>
    </table>
</body>
</html>