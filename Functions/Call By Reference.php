<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
    function Ashish(&$Gupta1){
        $Gupta1 .= "Ashish Gupta";
    }
    $Gupta = "Hello ";
    Ashish($Gupta);
    echo $Gupta;
   ?>
</body>
</html>