<?php
require_once('conexion.php');


session_start();
if(empty($_SESSION['usuario'])) 
{ 
	 header('Location: sesion.php');
}
else
{
	$id = $_GET['id'];
	$busqueda = mysql_query("SELECT * FROM informe WHERE id=$id"); 

	
	//$id
?>
<html>
<head>
<title> Detalles </title>
<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
<center><p class="titulo"> Detalles :) </p></center>
<fieldset class="vtnver">
<?php 
while ($row = mysql_fetch_array($busqueda)){
?>
	<label for="id" class="2">ID</label><br>
	<input type="text" class="v" name="id" value="<?php echo $row['id']; ?>" disabled> <br \>
	<label for="autor" class="2"> Autor </label><br \>
	<input type="text" class="v" name="autor" value="<?php echo $row['autor']; ?>" disabled><br \>
	<label for="titulo" class="2"> T&iacute;tulo </label><br \>
	<input type="text" class="v" name="titulo" value="<?php echo $row['titulo']; ?>" disabled><br \>
	<label for="contenido" class="2"> Contenido </label><br \>
	<textarea rows="10" cols="40" class="v" name="contenido" disabled><?php echo $row['detalles']; ?></textarea><br \>
	

	<?php }?>
<a href="inicio.php" class="etiqueta"> Regresar </a>

</fieldset>

</body>
</html>
<?php
}



?>
