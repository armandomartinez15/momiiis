<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>


<?php



$X=rand(1,10);
$Y=rand(1,10);
$Z=rand(1,10);
$suma = $X + $Y + $Z;
echo'sus calificaciones son: '.'<br>'. $Z . '<br>'. $Y . '<br>'. $X . '<br>';

$division = ($suma / 3);
echo "Su promedio es de: $division".'<br>';

if ($division<=6) {
	echo "El alumno reprobo";
} else {
	echo "El alumno aprobo";
}



?>

</body>
</html>