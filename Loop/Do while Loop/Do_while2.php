<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form meta="post" action="<?php $_SERVER["PHP_SELF"] ?>">
    <label>Enter the limit:</label>
    <input type="number" name="number">
    <button type="submit">submit</button>
    </form>
    <?php
    $i = 1;
    do{
        $j=$i;
        $t=0;
        $sum = 0;
        do{
            $t=($j%10);
            $sum = $sum*10+$t; 

            $j=intval($j/10);
        }while($j!=0);

        if($sum==$i){
            echo $sum."<br>";
        }

        $i++;
    }while($i<= $_POST["number"]);
    ?>
</body>
</html>