<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>exo 3</title>
</head>
<body>
	<?php 
	$var1 = 100;
	$var2 = 45;
	while($var1 >= 10){
		$result= $var1 * $var2;
		echo $result;
		--$var1;
		echo ("    ");
	}
	?>
	
</body>
</html>