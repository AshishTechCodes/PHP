<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x = "Ashish Gupta";
    echo "Hello $x";
    echo "<br>String lenght is: ";
    echo strlen($x);
    echo "<br>Word count: ";
    echo str_word_count($x);
    echo "<br>The Upper case: ";
    echo strtoupper($x);
    echo "<br>The Lower case: ";
    echo strtolower($x);
    echo "<br>The Suffele text is:";
    echo str_shuffle($x);
    echo "<br>";
     echo $current_time=date("H:i:s");
    ?>
</body>
</html>