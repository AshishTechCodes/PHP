<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Calculator</title>
    <style>
           body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        form {
            margin-bottom: 20px;
        }

        input[type="date"] {
            padding: 10px;
            font-size: 16px;
            width: 100%;
            border-radius: 4px;
            border: 1px solid #ccc;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #45a049;
        }

        .result {
            font-size: 18px;
            margin-top: 20px;
            font-weight: bold;
            color: #0089ff;
        }
    </style>
</head>
<body>
<div class="container">
        <h1>Age Calculator</h1>
        <form method="post" action="<?php $_SERVER["PHP_SELF"] ?>">
            <input type="date" name="date" max="<?= date('Y-m-d'); ?>" required>
            <button type="submit">Submit</button>
        </form>
        <div class='result'>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $birthdate = new DateTime($_POST["date"]);
    $Currentdate =new DateTime (date("Y/m/d"));
    $age = $Currentdate ->diff($birthdate);
    echo $age->y." Year ";
    echo $age->m." Month ";
    echo $age->d." Day ";
    }
    ?>
    </div>
    </div>
</body>
</html>