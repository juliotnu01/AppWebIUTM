<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sesion de: Usuario</title>
	<link type="text/css" rel="stylesheet" href="../css/IndexCss.css">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <script src="//code.angularjs.org/1.2.19/i18n/angular-locale_es-es.js"></script>
    </head>
<body ng-app="app">
	<div class="Cuerpo2">

<!-- TopMenu --><div class="TopMenu">
					<ul>
						<li>
							<a href="">Registro de Usuario</a>
						</li>
					</ul>
				</div><!-- end TopMenu -->
<!-- Form #1 --><form action="Config/insercionRegistro.php" method="POST"  id="form1">
					<fieldset>
					    <legend>Datos Personales</legend>
						    <input type="text" name="nombre" placeholder="Pimer Nombre" ng-model="PrimerNombre" required>
						    <input type="text" name="apellido" Placeholder="Primer Apellido" ng-model="SegundoNombre" required>
						    <input type="text" name="cedula" Placeholder="cedula" ng-model="cedula" required>
						    <input type="number" name="edad" placeholder="Edad" ng-model="edad" required >
						    <select id="genero" name="genero">
								  <option value="" selected="genero">Genero</option>
								  <option value="masculino">Masculino</option>
								  <option value="femenino">Femenino</option>
							</select>
						    <input type="date" name="fnacimiento" ng-model="fnacimiento" required>
						    <select id="nacionalidad" name="nacionalidad">
								  <option value="" selected="nacionalidad">Nacionalidad</option>
								  <option value="venezolano">Venezolano@</option>
								  <option value="extrangero">Extranger@</option>
							</select>
						    <input type="text" name="telefono" placeholder="Numero de Telefono" ng-model="telefono" required>
						    <input type="text" name="telefonom" placeholder="Numero de Movil" ng-model="telefonom" required>
					</fieldset>
				    <fieldset id="InfoCuenta">
					    <legend>Información de la Cuenta</legend>
						    <input type="text" id="usuario" name="usuario" placeholder="Usuario" ng-model="usuario" required>
						    <input type="text" id="contrasena" name="contrasena" placeholder="Contraseña" ng-model="contrasena" required>
						    <input type="text" id="correo" name="correo" Placeholder="Correo Electronico">
				 	</fieldset>
				 	<input type="submit" id="registrar" name="registrar" value="Registrar">

				</form><!-- end Form #1 -->
	</div>
</body>
</html>