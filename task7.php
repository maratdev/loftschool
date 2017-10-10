<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php
echo '<table><tr>';
for($i = 1; $i <= 10; $i++) {
    for($t = 1; $t <= 10; $t++) {
        if( ($i * $t) % 2 == 0 ) {
            echo '<td> (' .($i * $t). ') </td>';
        } else {
            echo '<td> [' .($i * $t). '] </td>';
        }
    }
    if ($i != 10) echo "</tr><tr>";
}
echo '</tr></table>';
?>
</body>
</html>
