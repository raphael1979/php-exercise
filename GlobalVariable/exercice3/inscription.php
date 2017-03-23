<?php 
setcookie("login", $_POST["login"]);
setcookie("mdp", $_POST["mdp"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>inscription.php</title>
</head>
<body>
	<?php 
	echo $_COOKIE['login']. " " .$_COOKIE['mdp'];	
	?>
	<a href="modif.php">modifier</a>
</body>
</html>