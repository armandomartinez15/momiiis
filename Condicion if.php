<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>


<?php

$n1=rand(1,100);
$n2=rand(1,100);
$n3=rand(1,100);

if ($n1>=$n2 && $n1>=$n3) {
	echo "el mayor es el primer numero: " .$n1;
} elseif ($n2>=$n1 && $n2>=$n3) {
	echo "el mayor es el segundo numero: " .$n2;
} else {
	echo "el mayor es el tercer numero: " .$n3;
}

echo "<br>";
if ($n1<=$n2 && $n1<=$n3) {
	echo "el menor es el primer numero: " .$n1;
} elseif ($n2<=$n1 && $n2<=$n3) {
	echo "el menor es el segundo numero: " .$n2;
} else {
	echo "el menor es el tercer numero: " .$n3;
}
$numeros='<br>'.$n1.'<br>'.$n2.'<br>'.$n3;
echo "<br> sus numeros son: ".$numeros;


?>

</body>
</html>