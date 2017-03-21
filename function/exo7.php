<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>exo7</title>
</head>
<body>
	<?php 
	function ageGenre($age, $genre){
		if($age >= 18){
			$majorite= "majeur(e)";
		}
		else
		{
			$majorite= "mineur(e)";
		};
		if($genre == "Homme"){
			$civilit = "Vous etes un homme ";
		}
		elseif($genre == "Femme"){
			$civilit = "vous etes une femme ";
		};
		return $civilit.$majorite;
	}
	echo ageGenre(23, "Femme");
	?>
</body>
</html>