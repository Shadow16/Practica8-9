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
$autor = $_POST['autor'];
$titulo = $_POST['titulo'];
$contenido = $_POST['contenido'];


$insertar = mysql_query("INSERT INTO informe (autor, titulo, detalles) VALUES ('$autor','$titulo','$contenido')");
if ($insertar)
	{
		header('Location:inicio.php');
	?>
<html> 
<head>
<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">
<!--
alert("¡Bienvenido!\n\tEsta Web está dedicada a JavaScript.");
//-->
</SCRIPT>
</head>
<body>

</body>
</html>

	<?php }
	else
		{
			echo "Error al guardar <br \>".mysql_error();
		}
//Cerramos la conexión
//mysqli_close($conexion);
		$conexion->close();
}

?>
