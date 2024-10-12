<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
$i=1;
$ia=1;
$iaa=1;
$X=7;
$Y=5;
$suma = $X + $Y;
while ($i <= 10) {
    $resultado = $suma;
    echo " la suma de $X y $Y es: $resultado<br>"; // Imprimimos la multiplicación y el resultado
    $i++;  // Incrementamos la variable
}

$resta = $X - $Y;
do {
	$resultado1=$resta;
    echo "la resta de $X y $Y es: $resultado1".'<br>';
   $ia ++;
   } while ($ia <= 10);

$multiplicacion = $X *$Y;
do {
	$resultado2=$multiplicacion;
    echo "la multiplicacion de $X y $Y es: $resultado2".'<br>';
   $iaa ++;
   } while ($iaa <= 10);

if ($Y !=0){
	$division = ($X + $Y)/3;
echo "la division de $X y $Y es: $division\n";
}else{
	echo'No se puede dividir entre cero\n';
}


?>
</body>
</html>