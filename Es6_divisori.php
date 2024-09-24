<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIVISORI</title>
</head>
    <body>
        
    </body>
</html>

<?php
    $n = rand(1, 50);

    echo "<p>Numero: $n</p>";

    echo "<ul>";

    for ($i = 1; $i < $n; $i++) {
        if ($n % $i == 0) {
            echo "<li>$i</li>";
        }
    }

    echo "</ul>";
?>