<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
        <label>Enter the limit:</label>
        <input type="number" name="number">
        <button>SUBMIT</button>
    </form>
    <?php
    for($i=1;$i<=$_POST["number"];$i++){
        echo $i."<br>";
    }
    ?>
</body>
</html>