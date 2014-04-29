<?php
session_start();
if(isset($_SESSION['usuario']))
{
	echo "Sesion Iniciada";
	header('Location:inicio.php');
}

 else 
 { ?>
<html>
<head>
<title> Iniciar Sesi&oacuten </title>
<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
<br \>
<center>
<p class="titulo"> Ingresar Usuario :)</p>
<fieldset class="sesion">
<form method="POST" action="inicio.php">
<label for="usuario"> Usuario </label> <br \>
<input type="text" name="usuario" class="etiqueta"><br \>
<label for="password"> Password </label><br \>
<input type="password" name="password" class="etiqueta"><br \>
<br \>
<input type="submit" value="Ingresar" class="boton">
</form>
</fieldset>
</center>
</body>
</html>
<?php
}
?>
