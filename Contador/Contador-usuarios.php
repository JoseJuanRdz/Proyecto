<?php 

ini_set('display_errors', 'Off');			//Elimina los errores de pantalla
ini_set('display_startup_errors', 'Off');
error_reporting(0);

function conexion(){ //se realiza la conexion con la base de datos.

	if(!($link=mysql_connect('localhost','root'))){
		echo "Error al conectar con la base de datos.";
		exit();
	}

	if(!mysql_select_db('prueba', $link)){
		echo "Error al seleccionar la base de datos";
		exit();
	}

	return $link;
}

$con = conexion();
$query = "SELECT COUNT(ID) FROM USUARIOS";			//Se realiza el conteo mediante la ID.
$q = mysql_query($query, $con);																					
try{

$contador = mysql_result($q, 0);					//El resultado de la consulta se almacena el la variable contador.

echo $contador;										//Muestra cuantos usuarios existen en la base de datos.

}catch(Exception $error){}

mysql_close($con);		//cierra la conexion con la base de datos.

 ?>