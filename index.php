<!DOCTYPE html>
<html>
<head>
	<title>Aplicación Web</title>
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- AngularJs --> 					 <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
		<!-- jQuery libreria de Bootstrap --> 			 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<!-- Ultima Compilacion de BootStrap --> 		 <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
		<!-- Ultima Compilacion de JavaScript de Bootstrap -->   <script src="css/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<!-- Menu principal -->
	<nav class="navbar navbar-default navbar-fixed-top navbar-jul">
		  <div class="container-fluid">
		    	<div class="navbar-header"><a class="navbar-brand" href="#">AppWebIUTM</a></div>
				    <div class="collapse navbar-collapse">
					    <ul class="nav navbar-nav">
					      <li class="navbar-jul"><a href="#">INICIO</a></li>
					      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">PAGINA 1 <span class="caret"></span></a>
						        <ul class="dropdown-menu">
						          <li><a href="#">Pagina 1.1</a></li>
						          <li><a href="#">Pagina 1.2</a></li>
						          <li><a href="#">Pagina 1.3</a></li>
						        </ul>
					      </li>
					      <li><a href="#">PAGINA 2</a></li>
					      <li><a href="#">PAGINA 3</a></li>
					    </ul>
					    <ul class="nav navbar-nav navbar-right">
				        <li>
				        	<a href="php/SegundaVista.php"><span class="glyphicon glyphicon-log-in"></span> Login </a>
				        </li>
				      </ul>
				  </div>
		  </div>
	</nav>
	<!-- end Menu principal -->
	
</body>
</html>
