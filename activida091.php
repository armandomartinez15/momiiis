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
			text-align: center;
			color: goldenrod;
		}


	</style>
</head>
<body>

<?php

$num=rand(1,100);

if ($num<=50) {
	echo $num; echo'<br>';
	echo'el numero es menor a 50: '; 


} else {
	echo $num; echo'<br>';
	echo'el numero es mayor a 50: '; 

}



?>


</body>
</html>