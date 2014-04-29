<?php
require_once('conexion.php');
session_start();
if(empty($_SESSION['usuario'])) 
{ 
	 header('Location: sesion.php');
}
else 
{
?>
<html>
<head>
<title> Nuevo </title>
<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
<form method="POST" action="guardar.php">
<center><p class="titulo"> Ingresar Autor </p></center>
<fieldset class="nuevo">
	<label for="autor" > Autor </label><br \>
	<input type="text" class="nv" name="autor"><br \>
	<label for="titulo"> T&iacute;tulo </label><br \>
	<input type="text" class="nv" name="titulo"><br \>
	<label for="contenido"> Contenido </label><br \>
	<textarea class="nv" rows="10" cols="40" name="contenido" ></textarea>
<input type="submit" value="Guardar" class="btn">
<a href="inicio.php" class="etiqueta"> Regresar </a>
</fieldset>
</form>
</body>
</html>
<?php	
}
 ?>
