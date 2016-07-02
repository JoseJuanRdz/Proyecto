<?php 

ini_set('display_errors', 'Off');			//Elimina los errores de pantalla
ini_set('display_startup_errors', 'Off');
error_reporting(0);

$username = $_POST['usuario'];
$password = $_POST['password'];
$sesion_inicio = true;

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
$query = "SELECT *FROM USUARIOS WHERE Usuario = '".$username."' AND Password = '".$password."'";			//Se realiza la consulta para
$q = mysql_query($query, $con);																				//validar los datos.
try{

	if(mysql_result($q, 0)){						//verifica si el usuario y la contraseña se encuentran en la base de datos.
		$result = mysql_result($q, 0);
		echo "Usuario validado correctamente";
	} else {
		echo "Usuario o contraseña incorrectos";
	}
} catch(Exception $error){}
mysql_close($con);		//cierra la conexion con la base de datos.

 ?>