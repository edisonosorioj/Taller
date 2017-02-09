<?php  
require_once 'conexion.php';

$conex = new conection();
$result = $conex->conex();

$tr='';
$query = mysqli_query($result,'select * from repuestos');

 while ($row = $query->fetch_array(MYSQLI_BOTH)){

 	$tr .=	"<tr class='rows' id='rows'>
				<td>" . $row['id'] 			. "</td>
				<td>" . $row['caja'] 		. "</td>
				<td>" . $row['articulo'] 	. "</td>
				<td>" . $row['ecg'] 		. "</td>
				<td>" . $row['precio'] 		. "</td>
			</tr>";

 }


$html = "<!DOCTYPE html>
<html>
<head>
	<meta charset='UTF-8' />
	<title>Softaller</title>
	<link rel='stylesheet' href='css/estilo.css' />
</head>
<body>
 <h1>Centro Electrónico</h1>
 <div>
 	<form>
 		<label>Buscar:</label>
 		<input type='text' name='buscar' placeholder='Texto'>
 		<input type='submit' name='buscar'>
 	</form>
 </div>
 <div id='table'>
 	<table>
 		<tr>
 			<td>ID</td>
 			<td>Caja</td>
 			<td>Articulo</td>
 			<td>ECG</td>
 			<td>Precio</td>
 		</tr>
		. $tr . 
 	</table>
 </div>
</body>
</html>";

echo $html;