<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
$calificaciones = array('Angel' => 9.5,
                        'Noel' => 10,
                         'Alain' => 7,
                         'Ashley' => 4,
                         'Momin' => 10);
foreach ($calificaciones as $nombre => $calificacion) {
	echo "La calificacion de $nombre es de $calificacion <br>";
}
echo "<p>";
asort($calificaciones);
foreach ($calificaciones as $nombre => $calificacion) {
	echo "La calificacion de $nombre es de $calificacion <br>";
}
?>
</body>
</html>