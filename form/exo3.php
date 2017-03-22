<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>formulaire3</title>
</head>
<body>
	<form action="user.php" method="GET">
		<label for="name">NOM</label>
		<input type="text" name="name" >
		<label for="name">Prenom</label>
		<input type="text" name="first_name">
		<input type="submit" value="Envoyer">
	</form>
	<?php 
	echo $_GET['name'];
	echo $_GET['first_name'];

	?>
</body>
</html>