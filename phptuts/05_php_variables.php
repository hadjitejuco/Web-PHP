<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Variables</title>

    <style>
        body {font-family: Arial, Helvetica, sans-serif; font-size: 16px;}
    </style>
</head>
<body>
    <h1>PHP Tutorial #5 Variables</h1>
    <hr>
    <?php
        // Understanding the Basics: Creating Variables in PHP
        // variables are used to store values
        // use "=" to assign a value
        $company = 'Microsoft Corporation';

        // always start variable names with a "$" followed by a letter or underscore
        $name     = 'MOMOLAND';
        $_another = 55;
        $name2    = 'QUEEN';

        // do not use single letters: hard to debug later!
        $a = 1;
        $b = 'Some Text';

        // use camelCase: take advantage of fact variables are case sensitive
        $firstName           = 'Johann';
        $cityStatePostalCode = 'Manila,  Philippines';
        $hourlyRate          = 99.69;

        // long names are allowed but can get out of hand!
        $theQuickBrownFoxJumpsOverTheLazyDog = 'TEST';
        echo $theQuickBrownFoxJumpsOverTheLazyDog;
    ?>
</body>
</html>