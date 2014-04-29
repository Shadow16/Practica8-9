<?php
require_once('conexion.php');
session_start();
if(empty($_SESSION['usuario'])) { // Recuerda usar corchetes.
 header('Location: sesion.php');
  // Recuerda usar corchetes
$_SESSION['usuario'] = $_POST['usuario'];
$_SESSION['password'] = $_POST['password'];
}
if ($_SESSION['usuario'] == 'root' && $_SESSION['password'] == 'admin')
{

?>
<html>
<head>
<title> Men&uacute; Principal </title>
<link rel="stylesheet" type="text/css" href="estilos.css">
<script type="text/javascript">
			window.setInterval (BlinkIt, 500);
			var color = "blue";
			function BlinkIt () 
			{
				var blink = document.getElementById ("blink");
				color = (color == "#ffffff")? "blue" : "#ffffff";
				blink.style.color = color;
				blink.style.fontSize='36px';}
		</script>
</head>
<body>
<center>
<fieldset class="inicio">
<br \>
	<div id="blink" class="mensaje"> Bienvenido!! </div>
	<p class="login"><?php echo $_SESSION['usuario']; ?></p>
</fieldset>

<br \><br \>
<?php 
$result = mysql_query("SELECT id, autor, titulo FROM informe") or die(mysql_error());
?>	
<center>
<table width="50%" border="0">
<tr>
<td></td>
<td></td>
<td></td>
<td> <form method="POST" action="nuevo.php"><input type="submit" value="Nuevo" class="btn"></form> </td>
</tr>
<tr class="encabezado">
<td>ID</td>
<td>Autor</td>
<td>T&iacute;tulo</td>
<td>Opci&oacute;nes</td>
</tr>
</table>
</center>
<?php
echo '<table class="menu" width="50%" border="0">';

while ($row = mysql_fetch_array($result)){
	//$_GET = $row["id"];
	# code...
    echo "<tr>";
    echo "<td>".$row["id"]."</td>";
    echo "<td>".$row["autor"]."</td>";
    echo "<td>".$row["titulo"]."</td>";
    ?>
    <td>
   	<form method='GET' action='editar.php'>
    <input type='hidden' value='<?php echo $row['id']; ?>' name="id"> 
    <input type="submit" value='' class="editar"></td>
    </form>
    <form method='GET' action='delete.php'>
    <input type='hidden' value='<?php echo $row['id']; ?>' name="id"> 
    <td><input type='submit' value='' class='eliminar'></td>
    </form>
    <form method='GET' action='ver.php'>
    <input type='hidden' value='<?php echo $row['id']; ?>' name="id"> 
    <td><input type='submit' value='' class='ver'></td>
    </form>
    </tr>
 <?php 
}


echo "</table>";

?>
</center>
<form method="POST" action="cerrar.php">
<input type="submit" value="Salir" class="btn">
</form>

<?php
}
else 
{
	echo "Usuario y contraseña Incorrectos: ";
	session_destroy();
	?>
	<form method="POST" action="sesion.php">
<input type="submit" value="regresar">
</form>

</body>
	<?php
}
?>
