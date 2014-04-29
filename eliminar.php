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
$borrar = mysql_query("DELETE FROM informe WHERE id='$id'");
if ($borrar)
	{
		header('Location:inicio.php');
		
	?>
<html> 
<head>
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
		
		//mysqli_close();

}
$conexion->close();
?>
