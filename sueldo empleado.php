<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		body{
			background-color: royalblue;
			font-family: inherit;
			font-size: 20px;
			color: white;
		}
		




	</style>
</head>
<body>

<?php

$nombre="Armando";
$antigüedad=rand(1,20);
echo'Nombre del empleado: '. $nombre . '<br>';

if ($antigüedad>5) {
	$sueldo=rand(5000,9000);
	echo"Cuenta con una antigüedad de mas de 5 años, felicidades!!! se le aplicara un aumento a su sueldo del 20%".'<br> '.'Su sueldo actual es de: $' .$sueldo .'<br>';
	$suma=($sueldo*.20);
	$sumat=$suma + $sueldo;

}else{
	$sueldo=rand(3000,5000);
	echo"No cuenta con los años correspondientes para su aumento, pero se le aumentara un 2% como bonus". '<br>'.'Su sueldo actual es de: $' .$sueldo . '<br>';
	$suma=($sueldo*.02);
	$sumat=$suma + $sueldo;
}

echo' Su aumento sera de: $' .$suma.' y'.' '.' su sueldo total sera de: $' . $sumat . '<br>'. 'Su antigüedad en la empresa es de: ' . $antigüedad . ' años';

?>

</body>
</html>