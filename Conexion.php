<?php 
	$conexion = mysql_connect('localhost', 'root', '', 'informe');
	$database = mysql_select_db('informe');
		if (!$conexion) 
		{ 
			echo "Error al Conectarse al localhost <br \>".mysql_report(); 
		} 
/*	$informe = mysql_select_db("informe");
	if (!$informe)
		{
			echo "Error al Seleccionar la Base de Datos: <br \>".mysql_error();
		}

*/
	return($conexion);
	return($database);

?> 
