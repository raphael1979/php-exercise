<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>formulaire4</title>
</head>
<body>
	<form action="user.php" method="POST">
		<label for="name">NOM</label>
		<input type="text" name="name">
		<label for="name">Prenom</label>
		<input type="text" name="first_name">
		<input type="submit" value="Envoyer">
	</form>
	<?php 
	echo $_POST['name'];
	echo $_POST['first_name'];
	?>
</body>
</html>