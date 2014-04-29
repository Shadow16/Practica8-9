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
<title> Editar </title>
<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
<form method="POST" action="update.php">
<center><p class="titulo"> Editar Autor :) </p></center>
<fieldset class="nuevo">
<?php 
while ($row = mysql_fetch_array($busqueda)){
?>
	<label for="id" > ID </label><br \>
	<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
	<input type="text" class="ed" name="id" value="<?php echo $row['id']; ?>" disabled> <br \>
	<label for="autor" > Autor </label><br \>
	<input type="text" class="ed" name="autor" value="<?php echo $row['autor']; ?>"><br \>
	<label for="titulo"> T&iacute;tulo </label><br \>
	<input type="text" class="ed" name="titulo" value="<?php echo $row['titulo']; ?>"><br \>
	<label for="contenido"> Contenido </label><br \>
	<textarea class="ed" rows="10" cols="40" name="contenido"><?php echo $row['detalles']; ?></textarea>
	

	<?php }?>
<input type="submit" value="Guardar" class="btn">
<a href="inicio.php" class="etiqueta"> Regresar </a>
</form>

</fieldset>

</body>
</html>
<?php
}



?>
