<?php 

include("Conexion.php");
 

// info-personal
$nombre 		=	$_POST['nombre'];
$apellido 		=	$_POST['apellido'];
$cedula			= 	$_POST['cedula'];
$edad			=	$_POST['edad'];
$genero  		=	$_POST['genero'];
$f_nacimiento	=	$_POST['fnacimiento'];
$nacionalidad	=	$_POST['nacionalidad'];
$telefono		=	$_POST['telefono'];
$telefonom		=	$_POST['telefonom'];
// info-Cuenta
$usuario		=	$_POST['usuario'];
$contrasena		=	$_POST['contrasena'];
$correo			=	$_POST['correo'];

$InfoPersonal = mysqli_query($conexion,"INSERT INTO informacion_personal  (nombre, 
																		   apellido, 
																		   cedula, 
																		   edad, 
																		   genero, 
																		   fnacimiento,  
																		   nacionalidad, 
																		   telefono, 
																		   telefonom) 
																  VALUES ('$nombre',
																  		  '$apellido',
																  		  '$cedula',
																  		  '$edad',
																  		  '$genero',
																  		  '$f_nacimiento',
																  		  '$nacionalidad',
																  		  '$telefono',
																  		  '$telefonom')");


$infoCuenta = mysqli_query($conexion,"INSERT INTO informacion_cuenta (usuario,contrasena,correo) VALUES ('$usuario','$contrasena','$correo')");

$id_usuario = mysqli_query($conexion,"UPDATE informacion_personal SET id_usuario = id_usuario+1 ");



if (isset($InfoPersonal) && isset($infoCuenta)) {
	echo "registrado";
	 
}else{
	echo "no registrado";
}

 ?>