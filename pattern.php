<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pattern Program</title>
</head>
<body>
<center>
<h3>Enter Rows Mumber</h3>
<form method="get" action="<?php $_SERVER['PHP_SELF']?>">
	<input type="number" name="rows" value="<?= isset($_GET['rows']) ? $_GET['rows'] : ''?>">
	<input type="submit" value="Create">
</form>
<?php
if(isset($_GET['rows'])){
	echo "<h3>Your Pattern</h3>";
	$rows = $_GET['rows'];
	for ($i = 0; $i < $rows; $i++) {

		// print the first part of pattern
		for ($j = $rows; $j >= $i+1; $j--) {
			echo $j;
		}
		// print the space between two pattern
		for ($k = 1; $k <= $i*2; $k++) {
			echo "&nbsp&nbsp";
		}

		// print the second part of pattern
		for ($x = $i+1; $x <= $rows; $x++) {
			echo $x;
		}

		// move to the next line
		echo "<br>";
	}
}
?>
</center>
</body>
</html>