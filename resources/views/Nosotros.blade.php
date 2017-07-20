<!DOCTYPE html>
<html>
<head>
	<title>Nosotros</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/app.css">
	<link rel="stylesheet" type="text/css" href="css/styleMain.css">
</head>
<body>
<div class="container-fluid" id="mainContainer">
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
	<h1 class="text-center" id="mainTitleNos">Nosotros</h1>
	<div class="container" id="quienesSomos">
		<div class="row" id="acerca">
			<h2>Acerca de Nosotros</h2>
			<p class="text-justify">
				Somos una idea en crecimiento, una posibilidad, este nuestro primer proyecto formal desarrollado en principio durante el curso de desarrollo web full stack de Digital House Buenos Aires Aregentina, consta de un juego basado en la temática de trivia pero tratando de transcender este concepto ya bastante presente en la web mediante la fusión de otro tipo de juego, un juego de tablero e incluso un componente estratégico importante mediante la toma de desiciones rápidas, consultar la pagina de <a href="#"> Reglas de Juego </a> para mayores detalles sobre toda la jugabilidad.
			</p>
		</div>
		<div class="row" id="objetivos">
			<h2>Objetivos y que Esperamos del Juego</h2>
			<p class="text-justify">
				Nuestro objetivo primordial a lograr mediante este proyecto de juego, es primeramente académico, pusimos en práctica todo lo aprendido durante la cursada, asi como poner a prueba nuestras habilidades como programadores y desarrolladores de proyectos, sin embargo esto no se queda acá. Este juego, si bien fue desarrollado dentro de un entorno académico tiene otro objetivo, es una idea real y la cuál consideramos tiene el potencial de lograr grandes cosas por medio de esfuerzo y trabajo, asi como infinitas posibilidades de crecimiento.  
			</p>
		</div>
		<div class="row" id="vision">
			<h2>Visión General del Juego</h2>
			<p class="text-justify">
				Nuestro juego (inserte aqui nombre del juego xD) es un juego de trivia, en el cual pueden participar 4 jugadores por partida, se desarrolla sobre un tablero que posee distintas casillas de colores y que son de distintos tipos y tiene como objetivo llegar primero al final del tablero. En principio los usuarios pueden decidir si unirse a alguna de las partidas creadas o crear una propia, una vez dentro de la partida esperaran hasta que haya 4 jugadores en total dentro. Una vez se completen los jugadores necesarios para comenzar la partida se pasa a jugar una ronda rápida, esta ronda rápida define el turno de los jugadores dentro de la partida. Cada jugador durante su turno lanza un dado de 4 caras con distintos colores que corresponden a los colores de las casillas del tablero una vez lanzado el dado, y conociendo el resultado el jugador se mueve hasta la casilla del color en que resultó el lanzamiento del dado, una vez en la casilla deberá responder una pregunta de la categoría a la cual corresponde el color de la casilla, de responder correctamente el jugador procede a lanzar el dado nuevamente en caso contrario el jugador se quedará en la casilla y perderá el turno. Este proceso se repite hasta que algún jugador logre llegar al final y responder una ultima pregunta de desafío. Hay más mecánicas dentro del juego pero dirigirse al apartado<a href="#"> Reglas de Juego </a> para mayor detalle en la jugabilidad
			</p>
		</div>
		<div class="row" id="consideraciones">
			<h2>Algunas Consideraciones</h2>
			<p class="text-justify">
				Este proyecto en este momento para las posibilidades y potencial que tiene consideramos se encuentra en el mejor de los casos en una etapa "alfa" temprana de desarrollo si bien todas las caracteristicas actualmente implementadas funcionan, este proyecto puede crecer mucho. Si bien no se ha hecho ninguna investigacion seria de mercado consideramos que es una idea original, que podría funcionar y que al menos según nuestro conocimiento no existe algo con características similares implementado en la web.
			</p>
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