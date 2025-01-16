<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Calculator</title>
</head>
<body>
    <form method="post" action="<?php $_SERVER["PHP_SELF"] ?>">
        <input type="date" name="date">
        <button type="submit">SUBMIT</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["date"])) {
    $birthdate = $_POST["date"];
    $Currentdate = date("Y/m/d",time());
    echo ($Currentdate - $birthdate);
    }
    ?>
</body>
</html>