<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>page2</title>
</head>
<body>
	<?php 
	session_start();
	
	echo $_SESSION['nom']." ";
	echo $_SESSION['prenom']." ";
	echo $_SESSION['age']." ";
	echo "C PAS FAUX";
	?>
	
</body>
</html>