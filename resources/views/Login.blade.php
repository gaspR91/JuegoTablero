<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
					<a href="{{ url('/Inicio') }}">
						<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
					</a>
					<a href="{{ url('/Inicio') }}">Inicio</a>
				</li>
				<li class="col-xs-12 col-sm-2 col-md-2" id="registroMenu">
					<a href="{{ url('/Registro') }}"></a>
					<a href="{{ url('/Registro') }}">Registro</a>
				</li>
				<li class="col-xs-12 col-sm-2 col-md-2" id="loginMenu">
					<a href="{{ url('/Login') }}"></a>
					<a href="{{ url('/Login') }}">Login</a>
				</li>
				<li class="col-xs-12 col-sm-2 col-md-2" id="nosotrosMenu">
					<a href="{{ url('/Nosotros') }}"></a>
					<a href="{{ url('/Nosotros') }}">Nosotros</a>
				</li>
				<li class="col-xs-12 col-sm-2 col-md-2" id="preguntasMenu">
					<a href="{{ url('/PreguntasFrecuentes') }}"></a>
					<a href="{{ url('/PreguntasFrecuentes') }}">Preguntas Frecuentes</a>
				</li>
				<li class="col-xs-12 col-sm-2 col-md-2" id="reglasMenu">
					<a href="{{ url('/ReglasDeJuego') }}"></a>
					<a href="{{ url('/ReglasDeJuego') }}">Reglas del Juego</a>
				</li>
			</ul>
		</nav>
	</header>
		<h1 class="text-center" id="mainTitleLog">Login</h1>
			<div class="container" id="login">
			<div class="row" id="loginBox">
				<form class="form-inline" id="emailLogin">
					<div class="form-group" id="emailDiv">
						<label for="email">Email</label>
						<input type="email" name="email" class="form-control" id="email" placeholder="tumail@dominio.com">
					</div>
				</form>
				<form class="form-inline" id="passLogin">
					<div class="form-group" id="passDiv">
						<label for="pass">Password</label>
						<input type="password" name="password" class="form-control" id="pass">
					</div>
				</form>
			 	<div class="checkbox" id="recordarme">
    				<label>
      					<input type="checkbox"> Recordarme
    				</label>
  				</div>
				<button class="btn btn-default" type="submit" id="submit">Login</button>
			</div>
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
							Instagram
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