<!-- global keyword is used to access a global variable from within a function. -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <?php
    $x = 5;
    $y = 10;
    echo $x." + ".$y." = ";
    function global_keyword(){
        global $x,$y;
        $y = $x+$y;
        // $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
    }
    global_keyword();
    echo $y;
    ?>
 </body>
 </html>