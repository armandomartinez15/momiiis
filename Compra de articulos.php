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

$NombreArt1='Airpods ';
$PrecioArt1=rand(800,3000);
$NombreArt2='Tablet ';
$PrecioArt2=rand(800,3000);
$NombreArt3='Bocina JBL ';
$PrecioArt3=rand(800,2000);
$Suma=$PrecioArt1+$PrecioArt2+$PrecioArt3;

if ($Suma>5000) {
	$comprades=$Suma * .10;
	$compratotal=$Suma - $comprades;
	$descunto=10;
} else {
	$comprades=$Suma * .05;
	$compratotal=$Suma - $comprades;
	$descunto=5;
}

echo 'Articulo: '. $NombreArt1. '= $' . $PrecioArt1.'<br>'. 'Articulo: '. $NombreArt2. '= $' . $PrecioArt2. '<br>'. 'Articulo: '. $NombreArt3. '= $' . $PrecioArt3 .'<br> Su compra total es de: $'. $Suma .'<br> Se le aplica un descuento del: '. $descunto . '% equivalente a: $'. $comprades. '<br> El total a pagar es de: $'. $compratotal;

?>



</body>
</html>