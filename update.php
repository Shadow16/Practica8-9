<?php
require_once('conexion.php');
session_start();
if(empty($_SESSION['usuario'])) 
{ 
	 header('Location: sesion.php');
}
else
{

$id = $_POST['id'];
$autor = $_POST['autor'];
$titulo = $_POST['titulo'];
$contenido = $_POST['contenido'];

$insertar = mysql_query("UPDATE informe SET id='$id', autor='$autor', titulo='$titulo', detalles='$contenido' WHERE id='$id'");
if ($insertar)
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

?>
