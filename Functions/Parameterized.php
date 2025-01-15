<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
    <label>Enter the 1st number:</label>    
    <input type="number" name="first">
    <br>
    <label>Enter the 2nd number:</label>
    <input type="number" name="second">
    <br>
    <button type="submit">SUBMIT</button>
    </form>
    <?php
    function add($x,$y){
        $sum = $x + $y;
        echo $x." + ".$y." = ".$sum;
    }
    add($_POST['first'],$_POST['second']);
    ?>
</body>
</html>