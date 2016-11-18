<?php 
require_once "Config.php";

// $conexion = mysqli_connect(HOST,USER,PASS,DBNAME) or die (mysqli_connect_errno("Fallo la conexion"));


class conexionDB extends mysqli{

	 public	function __construct(){
			parent::__construct('localhost','root','','iutm');
			$this->query("SET NAME 'utf8';");
			$this->connect_errno ? die('Error en la conexion') : $c = 'Conectado' ;
			// echo $c;
			unset($c);
}
}




?>