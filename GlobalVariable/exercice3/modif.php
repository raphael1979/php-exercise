<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>modif cookie</title>
</head>
<body>
	<?php 
	echo "<form action='inscription.php' method='POST'>
	<label for=''>login :</label>
	<input type='text' name='login' value='".$_COOKIE['login']."'>
	<label for=''>Mot de passe :</label>
	<input type='text' name='mdp' value='".$_COOKIE['mdp']."'>
	<input type='submit' value='connection'>
	<label>Envoyer</label></form>";
	?>
	

</body>
</html>