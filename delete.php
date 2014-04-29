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
<title> Eliminar </title>
<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
<center><p class="titulo"> Eliminar xD </p></center>
<fieldset class="vtnver">
<form method="GET" action="eliminar.php">
<?php 
while ($row = mysql_fetch_array($busqueda)){
?>
	<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
	<label for="id" class="2">ID</label><br>
	<input type="text" class="ct" name="id" value="<?php echo $row['id']; ?>" disabled> <br \>
	<label for="autor" class="2"> Autor </label><br \>
	<input type="text" class="ct" name="autor" value="<?php echo $row['autor']; ?>"><br \>
	<label for="titulo" class="2"> T&iacute;tulo </label><br \>
	<input type="text" class="ct" name="titulo" value="<?php echo $row['titulo']; ?>"><br \>
	<label for="contenido" class="2"> Contenido </label><br \>
	<textarea rows="10" cols="40" class="ct" name="contenido"><?php echo $row['detalles']; ?></textarea><br \>
	

	<?php }?>
<input type="submit" value="Eliminar" class="boton">
<a href="inicio.php" class="etiqueta"> Regresar </a>
</form>

</fieldset>

</body>
</html>
<?php
}

mysql_close($conexion);

?>
