<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>exo3</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<form action="inscription.php" method="POST">
		<p><label for="">Login :</label>
			<input type="text" name="login" value="raf"></p>
			<p><label for="">Mot de passe :</label>
				<input type="password" name="mdp" value="123"></p>
				<p><input type="submit" value="connection">
					<label for="">Envoyer</label></p>
				</form>
				<?php 
				
				setcookie("login", $_POST["login"]);
				setcookie("mdp", $_POST["mdp"]);

				?>
			</body>
			</html>