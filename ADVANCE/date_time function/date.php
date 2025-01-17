<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Current Timestamp</title>
</head>

<body>
    <center>
        <?php
        echo "Today is " . date("Y/m/d") . "<br><br>";

        echo "Today is " . date("Y.m.d") . "<br><br>";

        echo "Today is " . date("Y-m-d") . "<br><br>";

        echo "Today is " . date("l") . "<br><br>";

        echo "current timestamp is: " . time() . "<br><br>";

        echo "&copy; 2010 - " . date("Y") . "<br><br>";

        echo "The time is " . date("h:i:sa") . "<br><br>";

        // or

        echo "The time is " . date("H:i:sa") . "<br><br>";

        $time = mktime(7, 31, 55, 1, 16, 2025);
        echo "Created date is " . date("y-m-d h:i:sa", $time) . "<br><br>";

        echo date("time") . "<br><br>";

        $d = strtotime("08:00pm January 16 2025");
        echo "Created date is " . date("Y-m-d h:i:sa", $d) . "<br><br>";

        echo date("Y-m-d h:i:sa", time()) . "<br><br>";

        $d = strtotime("tomorrow");
        echo date("Y-m-d h:i:sa", $d) . "<br><br>";

        $d = strtotime("next Thursday");
        echo date("Y-m-d h:i:sa", $d) . "<br><br>";

        $d = strtotime("5year 3months 10days");
        echo date("Y-m-d h:i:sa", $d) . "<br><br>";


        date_default_timezone_set("Asia/kolkata");
        for($i = 0; $i < 5; $i++) {
        echo "The time is " . date("h:i:sa")."<br>";
        sleep(1);
        }
        ?>
    </center>
</body>

</html>