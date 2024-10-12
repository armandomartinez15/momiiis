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

$compratotal=rand(900,11000);
$IVA=($compratotal *.15);
echo "Su compra es de: $$compratotal <br>";

if ($compratotal<1000) {
	echo "Se le suma el IVA del 15%: $$IVA <br>";
	echo "Se le aplica un descuento del 5%";
	$comprades=($compratotal*.05);
	$compra_con_des= $compratotal-$comprades;
	echo "<br> Descuento: $$comprades <br>";
	$total_a_pagar=$compra_con_des+$IVA;
	echo "Su total a pagar es de: $$total_a_pagar";

}elseif ($compratotal>=1000 && $compratotal<5000) {
	echo "Se le suma el IVA del 15%: $$IVA <br>";
	echo "Se le aplica un descuento del 10%";
	$comprades=($compratotal*.10);
	$compra_con_des= $compratotal-$comprades;
	echo "<br> Descuento: $$comprades <br>";
	$total_a_pagar=$compra_con_des+$IVA;
	echo "Su total a pagar es de: $$total_a_pagar";

}elseif ($compratotal>=5000 && $compratotal<10000) {
	echo "Se le suma el IVA del 15%: $$IVA <br>";
	echo "Se le aplica un descuento del 12%";
	$comprades=($compratotal*.12);
	$compra_con_des= $compratotal-$comprades;
	echo "<br> Descuento: $$comprades <br>";
	$total_a_pagar=$compra_con_des+$IVA;
	echo "Su total a pagar es de: $$total_a_pagar";

}elseif ($compratotal>=10000) {
	echo "Se le suma el IVA del 15%: $$IVA <br>";
	echo "Se le aplica un descuento del 16%";
	$comprades=($compratotal*.16);
	$compra_con_des= $compratotal-$comprades;
	echo "<br> Descuento: $$comprades <br>";
	$total_a_pagar=$compra_con_des+$IVA;
	echo "Su total a pagar es de: $$total_a_pagar";
}

echo "<br> Gracias por su, compra vuelva pronto";

?>

</body>
</html>