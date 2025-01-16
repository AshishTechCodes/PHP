<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
    $startdate = strtotime("monday");
    $enddate = strtotime("+1 month",$startdate);

    while($startdate < $enddate){
        echo date("M d",$startdate)."<br>";
        $startdate = strtotime("+1 week",$startdate);
    }
   ?>
</body>
</html>