<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>formulaire7</title>
</head>
<body>
	<?php
	if (!$_POST["civilit"]||!$_POST["name"]||!$_POST["first_name"]) {

		echo '<form action="index.php" method="POST">
		<select name="civilit">
			<option value="Mr">Mr</option>
			<option value="Mme">Mme</option>
		</select>
		<label for="name">NOM</label>
		<input type="text" name="name">
		<label for="name">Prenom</label>
		<input type="text" name="first_name">
		<label for="name">Fichier</label>
		<input type="file" name="file">
		<input type="submit" value="Envoyer"></form>';
	}else{	
		echo $_POST["civilit"] . " " . $_POST["name"] . " " . $_POST["first_name"]." ".$_POST["file"];
	}
	?>
</body>
</html>