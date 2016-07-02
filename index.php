<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Inicia Sesion</title>
</head>
<body>
	<form action = "conexion.php" method = "POST">
	<fieldset>
				<legend>Inicia Sesion</legend>

				<p>
						<input type = "text" name = "usuario" placeholder = "Usuario" title = "Se nesecita un usuario" required>
				</p>

				<p>
						<input type = "password" name = "password" placeholder = "Contraseña" title = "Se nesecita una contraseña" required>
				</p>
				<p>
						<input type = "submit" value = "Entrar">
						<input type = "reset" value ="Limpiar">
				</p>

</body>
</html>