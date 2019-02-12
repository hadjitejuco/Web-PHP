<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Variables</title>
    <style>
        body {font-family: Arial, Helvetica, sans-serif; font-size: 16px;}
    </style>
<body>
    <h1>PHP Tutorial #9 Variables</h1>
	<?php
		// Understanding the Basics: Creating Variables in PHP
		// The data type of a variable can change as the script runs

		// start by assigning a value which is integer
		$value = 12345;
		var_dump($value);
		echo '<br />';

		// now assign a float
		// same variable, different data type
		$value = 12345.22;
		var_dump($value);
		echo '<br />';

		// try assigning as a string
		$value = 'Some Text';
		var_dump($value);
		echo '<br />';

		// now let's try a boolean
		$value = TRUE;
		var_dump($value);
		echo '<br />';
	?>
</body>
</html>