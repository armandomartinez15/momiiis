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

$peso=56;
$altura=1.70;
$IMC=$peso/($altura*$altura);
 if ($IMC<18.5) {
 	echo "Peso bajo";
 } elseif($IMC>=18.5 && $IMC<25){
 	echo "Peso normal";
 } elseif($IMC>=25 && $IMC<30){
 	echo "Sobrepeso";
 } else {
 	echo "Obesidad";
 }
 echo "<br> Su peso es de: $peso <br> Su altura es de: $altura <br> Su IMC es de: $IMC";


?>

</body>
</html>