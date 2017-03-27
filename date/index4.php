<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>exo5</title>
</head>
<body>
	<?php 
	// setlocale(LC_TIME, 'fr_FR.UTF8');
	// echo strftime('%A %d %B %Y, %H:%M');
	// echo time()."\n";
	// echo mktime(12, 0, 0, 8, 2, 2016);
	$datetime1 = new DateTime();
	$datetime2 = new DateTime('16-05-2016');
	$interval = $datetime1->diff($datetime2);
	echo $interval->format('%R%a days');



	?>
</body>
</html>