<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Number</title>
</head>
<body>
    <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
        <label>Enter the limit:</label>
        <input type="number" name="number">
        <button>SUBMIT</button>
    </form>
    <?php
    for($i=1;$i<=$_POST["number"];$i++){
        $t=0;
        $sum=0;
        for($j=$i;$j!=0;$j=intval($j/10)){
            $t=intval($j%10);
            $l=1;
            for($k=$t;$k!=0;$k--){
                $l = $l*$k;
            }
            $sum =$sum + $l;
            
            if($sum==$i){
                echo $i."<br>";
            }
        }
    }
    ?>
</body>
</html>