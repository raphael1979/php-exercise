<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>exo9</title>
</head>
<body>
	<?php 
	$hautDeFrance = array(59 => "Nord", 62 => "Pas de calais", 80 => "Somme", 02 => "Aisne", 60 => "Oise");
	
	foreach ($hautDeFrance as $departement) {
		echo $departement. " ";
	}
	?>
</body>
</html>