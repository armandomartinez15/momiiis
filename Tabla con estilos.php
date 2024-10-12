<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tabla con estilos</title>
	<style type="text/css">
		body{
			background-color: purple;
			font-family: fantasy;
			color: black;
			width: 100%;
		}
		table{
			background-color: white;
			text-align: left;
			border-collapse: collapse;
			width: 50%;
			color: black;
			margin-top: 2%;
			margin-left: 30%;
		}
		thead{
			background-color: pink;
			border-bottom: solid 5px #0F362D;
			color: black;
		}
		th,td{
			padding: 4px;
		}
		tr:nth-child(even){
			background-color: gray;
		}

		tr:hover td {
			background-color: pink;
			color: white;
		}


	</style>
</head>
<body>
<?php
echo'<table border="1">
<thead>
<tr>
<th>Grupo Musical</th>
<th>Genero</th>
<th>País</th>
<th>Integrantes</th>
</tr>
</thead>

<tr>
<td>Los tucanes de tijuana</td>
<td>Banda Norteña</td>
<td>México</td>
<td>Mario Quintero Lara,David Servín Raya,<br>Gustavo Labrada Valenzuela,<br>Alfredo González González y<br>Luis Adrián Cazares Gómez</td>
</tr>

<tr>
<td>Los tigres del norte</td>
<td>Banda Norteña</td>
<td>México</td>
<td>Jorge Hernández, <br>Eduardo Hernández, <br>Hernán Hernández, <br>Luis Hernández, <br>Oscar Lara</td>
</tr>

<tr>
<td>The Beatles</td>
<td>Rock</td>
<td>Reino Unido</td>
<td>Jhon Lennon, Paul McCartney<br>, George Harrison<br>, <br>, Ringo Starr<br></td>
</tr>

</table';
?>
</body>
</html>