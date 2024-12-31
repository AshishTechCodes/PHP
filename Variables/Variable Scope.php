<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h1>Global Scope</h1>";

    $x = 5;
    function global_scope(){
        echo "<p>Global Variable x value inside function is $x</p><br>";
    }
    global_scope();
    echo "<p>Global Variable x value outside function is $x</p><br>";


    echo "<h1>Local Scope</h1>";

    function Local_scope(){
        $y = 10;
        echo "<p>Local Variable y value inside function is $y</p><br>";
    }
    Local_scope();
    echo "<p>Local Variable y value outside function is $y</p><br>";
    ?>
</body>
</html>