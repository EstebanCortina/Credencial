<!DOCTYPE html>
<html>
<head>
	<title>Credencial</title>
	<meta charset="utf-8">
</head>
<body>

	<img src="credencial.jpg">

	<?php
	$n = $_GET['id'];
	$c = $_GET['c'];
	$e = $_GET['id3'];
	$es = $_GET['id2'];
	$l = $_GET['id4'];
 	?>

<h2 style="position: absolute; margin-top: -419px; margin-left: 350px"><?php echo $n; ?></h2>
<h2 style="position: absolute; margin-top: -298px; margin-left: 350px"><?php echo $c; ?></h2>
<h3 style="position: absolute; margin-top: -90px; margin-left: 180px"><?php echo $es; ?></h2>
<h3 style="position: absolute; margin-top: -60px; margin-left: 180px"><?php echo $l; ?></h2>

</body>
</html>