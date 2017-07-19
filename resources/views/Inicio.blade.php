<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/app.css">
	<link rel="stylesheet" type="text/css" href="css/styleMain.css">
</head>
<body>
<div class="container-fluid" id="mainContainer">
	<header class="container-fluid" id="mainHeader">
		<nav class="container" id="mainMenu">
			<ul class="row" id="menuItems">
				<li class="col-xs-12 col-sm-2 col-md-2" id="inicioMenu">
					<a href="Inicio.blade.php">
						<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
					</a>
					<a href="Inicio.blade.php">Inicio</a>
				</li>
				<li class="col-xs-12 col-sm-2 col-md-2" id="registroMenu">
					<a href="Registro.blade.php"></a>
					<a href="Registro.blade.php">Registro</a>
				</li>
				<li class="col-xs-12 col-sm-2 col-md-2" id="loginMenu">
					<a href="Login.blade.php"></a>
					<a href="Login.blade.php">Login</a>
				</li>
				<li class="col-xs-12 col-sm-2 col-md-2" id="nosotrosMenu">
					<a href="Nosotros.blade.php"></a>
					<a href="Nosotros.blade.php">Nosotros</a>
				</li>
				<li class="col-xs-12 col-sm-2 col-md-2" id="preguntasMenu">
					<a href="PreguntasFrecuentes.blade.php"></a>
					<a href="PreguntasFrecuentes.blade.php">Preguntas Frecuentes</a>
				</li>
				<li class="col-xs-12 col-sm-2 col-md-2" id="reglasMenu">
					<a href="ReglasDeJuego.blade.php"></a>
					<a href="ReglasDeJuego.blade.php">Reglas del Juego</a>
				</li>
			</ul>
		</nav>
	</header>
	<h1 id="mainTitle">¡Bienvenidos!</h1>
	<div class="container" id="content">
		<figure class="row" id="imageContainer">
			<img src="" id="homeImage">
		</figure>
	</div>
	<footer class="container" id="mainFooter">
		<ul class="row" id="footerItems">
			<li class="col-xs-6 col-md-6" id="socialNetworks">
				<ul class="row" id="socialContainer">
					<li class="col-xs-6 col-sm-4 col-md-4" id="facebook">
						<a href="#" id="linkFacebook">
							Facebook
						</a>
					</li>
					<li class="col-xs-6 col-sm-4 col-md-4" id="twitter">
						<a href="#" id="linkTwitter">
							Twitter
						</a>
					</li>
					<li class="col-xs-6 col-sm-4 col-md-4" id="Instagram">
						<a href="#" id="linkInstagram">
							Imstagram
						</a>
					</li>
				</ul>
			</li>
			<li class="col-xs-6 col-sm-6 col-md-6" id="terminosYcondiciones">
				<div class="row" id="terminos">
					<a href="#" id="linkTerminos" class="text-right"> Terminos y Condiciones </a>
				</div>
			</li>
		</ul>
	</footer>
	</div>

</body>
</html>