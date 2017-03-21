<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>exo4</title>
</head>
<body>
	<?php 
	function nbr ($nb1, $nb2){
		if ($nb1 < $nb2){
			return "c'est plus petit";
		}else if($nb1 > $nb2){
			return "c'est plus grand";
		}else{
			return "c'est égal";
		}
	}
	echo nbr(3, 5);
	?>
	
</body>
</html>