<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>String Concatenation</title>
    <style>
        body {font-family: Arial, Helvetica, sans-serif; font-size: 16px;}
    </style>
<body>
	<h1>PHP Tutorial #9 - String Concatenation</h1>
	<hr>
	<?php
		// Understanding the Basics: Working with Strings
		// use the concatenate operator "." to join strings

		// assign values
		$street 	= 'Main Street';
		$number 	= 216;
		$city 		= 'Malolos';
		$province 	= 'Bulacan';

		// concatenate on assignment
		$address = $number . ' ' . $street . ', ' . $city . ', ' . $province;
		echo "<br />Full Address Using '.'  :<br /> $address";
	?>
</body>
</html>