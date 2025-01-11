<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Limit Counter</title>
</head>
<body>
    <form method="post" action="<?php $_SERVER["PHP_SELF"]?>">
        <label for="limit">Enter the limit:</label>
        <input type="number" id="limit" name="limit" required>
        <button type="submit">Submit</button>
    </form>
    <?php
        $a = $_POST["limit"];
        $i = 1;
        while ($i <= $a) {
            echo $i . " ";
            $i++;
        }
    ?>
</body>
</html>
