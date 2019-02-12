<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Case sensitivity</title>

    <style>
        body {font-family: Arial, Helvetica, sans-serif; font-size: 16px;}
    </style>

</head>
<body>
    <h1>PHP Tutorial #4 - Case sensitivity</h1>
    <hr>
    <?php
        $color = "green";
        echo 'My bike is ' . $color . '<br>';
        echo 'My car is ' . $COLOR . '<br>';
        echo 'My motorcycle is ' . $coLOR . '<br>';
    ?>
</body>
</html>