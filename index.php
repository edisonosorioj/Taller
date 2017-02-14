<?php  
require_once 'conexion.php';

$conex = new conection();
$result = $conex->conex();

$tr='';
$query = mysqli_query($result,'select * from repuestos');

 while ($row = $query->fetch_array(MYSQLI_BOTH)){

 	$tr .=	"<tr class='rows' id='rows'>
				<div>
				<td>" . $row['id'] 			. "</td>
				<td>" . $row['caja'] 		. "</td>
				<td><a href='#' id='1'>" . $row['articulo'] 	. "</a></td>
				<td>" . $row['ecg'] 		. "</td>
				<td>" . $row['precio'] 		. "</td>
				</div>
			</tr>
			<tr style='display:none' id='detalles'>
			<td colspan='5'>" . $row['id'] 	. "<label> Detalles de la tabla</label><a href='#' id='2'>Cerrar</a></td>
			</tr>
			";
 }

$html = "<!DOCTYPE html>
		<html>
		<head>
			<meta charset='UTF-8' />
			<script src='http://code.jquery.com/jquery-1.10.2.min.js'></script>
			<script src='http://code.jquery.com/jquery-migrate-1.2.1.min.js'></script>
			<script src='http://code.jquery.com/ui/1.11.3/jquery-ui.min.js'></script>
			<title>Softaller</title>
			<link rel='stylesheet' href='css/estilo.css' />
		</head>
		<body>
		 <h1>Centro Electrónico</h1>
		 <div>
		 	<form>
		 		<label>Buscar: </label><input type='text' id='search' />
		 	</form>
		 </div>
		 <div id='table'>
		 	<table id='table_result'>
		 		<tr>
		 			<td>ID</td>
		 			<td>Caja</td>
		 			<td>Articulo</td>
		 			<td>ECG</td>
		 			<td>Precio</td>
		 		</tr>"
				. $tr . 
		 	"</table>
		 </div>
		</body>
		<script src='js/acciones.js'></script>
		<script>

		</script>
		</html>";

echo $html;