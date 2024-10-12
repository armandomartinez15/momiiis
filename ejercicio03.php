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
			font-size: 20px;
			color: black;
		}


	</style>
</head>
<body>
<?php
$fecha=date("d/m/Y");
$dia=date("d");

echo $fecha; echo'<br>';

echo $dia; echo'<br>';
if ($dia<=10) {
 echo'sitio activo';

}else{
for ($i = 1; $i <= 10; $i++) {
    $resultado = 'sitio fuera de servicio';
    echo " $resultado<br>";
}
}


?>



</body>
</html>