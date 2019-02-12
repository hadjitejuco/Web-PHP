<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Script Tags</title>

    <style>
        body {font-family: Arial, Helvetica, sans-serif; font-size: 18px;}
    </style>

</head>
<body>
    <h1>Tutorials #1</h1>
    <p>PHP script to display the text Hello World and the current date.</p>
    <hr>
    <?php
        echo 'Hello World';
        //http://php.net/manual/en/function.date.php

        $today = date('l d\th of Y');

        //2019-01-27
        echo "<p><b>Today is $today </b></p>";
    ?></body>
</html>
