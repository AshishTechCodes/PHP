<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post">  
Enter first number: <input type="number" name="first"/><br><br>  
Enter second number: <input type="number" name="second"/><br><br>  
<input type="submit" name="add" value="ADDITION"/>  
<input type="submit" name="sub" value="SUBTRACTION"/>  
</form>     

<?php  
function add($x,$y)
{  
$sum=$x+$y;  
echo $sum." = ".$x." + ".$y."<br><br>";  
}  
function sub($x,$y)    
{  
$sub=$x-$y;  
echo $sub." = ".$x." - ".$y."<br><br>";  
}  

if(isset($_POST['add']))
{  
 add($_POST['first'],$_POST['second']);
}
if(isset($_POST['sub']))  
{  
sub($_POST['first'],$_POST['second']);
}
?>
</body>
</html>