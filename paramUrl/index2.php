<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>exo2</title>
</head>
<body>
	<?php 

	if (isset($_GET['prenom']) && isset($_GET['nom']) && isset($_GET['age'])) {
		echo "les variables $prenom $nom $age existent et valent : " .$_GET['prenom'] .$_GET['nom'] .$_GET['age'];
	}else {
		echo "l'url n'est pas au format index.php?nom=Nemare&prenom=Jean&age=55";
	}
	?>
	
</body>
</html>



