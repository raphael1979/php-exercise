<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>exo10</title>
</head>
<body>
	<?php 
	$hautDeFrance = array(59 => "Nord", 62 => "Pas de calais", 80 => "Somme", 02 => "Aisne", 60 => "Oise");
	
	foreach ($hautDeFrance as $key => $departement) {
		echo "Le departement ".$departement." a le numero".$key." ";
	}
	?>
</body>
</html>