<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		body{

			background-color: gray;
			font-family: inherit;
			font-size: 50px;
			color: goldenrod;
		}


	</style>
</head>
<body>


<?php

$num=rand(1,10);

if ($num<6) {
	echo 'su calificacion es: '; echo $num; echo'<br>';
	echo'ALUMNO REPROBADO '; 


} else {
	echo 'su calificacion es: '; echo $num; echo'<br>';
	echo'ALUMNO APROBADO'; 

}



?>



</body>
</html>