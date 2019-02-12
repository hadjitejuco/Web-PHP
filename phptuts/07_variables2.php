<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Variables</title>
    <style>
        body {font-family: Arial, Helvetica, sans-serif; font-size: 16px;}
    </style>
<body>
    <h1>PHP Tutorial #7 Variables</h1>
	<hr>
	<?php
		// Understanding the Basics: Creating Variables in PHP
		// text is represented in PHP with the data type "string"

		// you can assign a string value using 'single quotes'
		$stringValue1 = 'This is a string.';
		echo $stringValue1;
		echo '<br />';

		// use the backslash "\" to "escape" special characters
		$stringValue2 = 'This is a string, isn\'t it?';
		echo $stringValue2;
		echo '<br />';

		// use "double quotes" when you need to expand variables inside some text
		// this is called "interpolation"
		$name = 'Hadji';
		echo "<br />Welcome $name to our new website!";

		// what happens if you forget the "\"?
		$stringValue4 = 'This is a string, isn\'t it?';
		echo $stringValue4;
	?>
</body>
</html>