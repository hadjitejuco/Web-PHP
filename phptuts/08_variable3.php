<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Variables</title>
    <style>
        body {font-family: Arial, Helvetica, sans-serif; font-size: 16px;}
    </style>
<body>
    <h1>PHP Tutorial #8 Variables</h1>
	<hr>
	<?php
		// Understanding the Basics: Creating Variables in PHP
		// The boolean data type is used to represent TRUE or FALSE

		// assigning TRUE
		$validUser = TRUE;

		// using TRUE in an "if" statement
		if ($validUser) {
			echo 'User is Valid';
		} else {
			echo 'User is NOT Valid';
		}
		echo '<br />';

		// assigning FALSE
		$validUser = FALSE;

		// try again
		if ($validUser) {
			echo 'User is Valid';
		} else {
			echo 'User is NOT Valid';
		}
	?>
</body>
</html>