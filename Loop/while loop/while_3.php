<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armstrong Number</title>
</head>
<body>
    <form method="post" action="<?php $_SERVER["PHP_SELF"] ?>">
        <label>Enter The limit:</label>
        <input type="number" name="number">
        <button>SUBMIT</button>
    </form>
    <?php
    $i = 0;
    while ($i <= $_POST["number"]) {
        $j = $i;
        $sum = 0;
        $t = 0;
        while ($j != 0) {
            $t = $j % 10;
            $sum = $sum + $t * $t * $t;
            //using intval for converting float to int.
            $j = intval($j / 10);
        }
        if ($i == $sum) {
            echo $i . "<br>";
        }
        $i++;
    }
    ?>
</body>
</html>