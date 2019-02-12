<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Adding Comments</title>

    <style>
        body {font-family: Arial, Helvetica, sans-serif; font-size: 16px;}
    </style>

</head>
<body>
    <h1>PHP Tutorial #2 - Adding Comments</h1>
    <hr>
    <?php
        // Understanding the Basics: Adding Comments
        // This is a single line comment
        echo '<br/>';
        echo '<br/>';
        echo 'The single line comment does not appear, but this text does!';
        # Comments do not appear when viewing the page source
        echo '<br/>';
        echo '<br/>';
        echo 'Comments do not appear when viewing the page source either.';

        echo '<br/>';
        echo '<br/>';
        // This is an inline comment
        $value = 'inline comment';      
        echo $value. ' does not appear, but this text does!';
        /*
         * This is a 
         * multiline
         * comment
         */
        echo '<br/>';
        echo '<br/>';
        echo 'The multiline comment does not appear, but this text does!';
    ?>
</body>
</html>