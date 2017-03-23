<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GlobalVariable2</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<a href="index2.php">page2</a>
	<?php 
	session_start();
	$_SESSION["nom"] = "LEGALLOIS";
	$_SESSION['prenom'] = "Provencal";
	$_SESSION['age'] = 45;
	?>
</body>
</html>