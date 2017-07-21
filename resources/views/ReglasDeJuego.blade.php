<!DOCTYPE html>
<html>
<head>
	<title>Reglas de Juego</title>
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
	<h1 class="text-center" id="mainTitleRe">Reglas De Juego</h1>
	<div class="container" id="reglasDeJuego">
		<div class="row" id="condicionesIniciales">
			<h2>Comenzando La Partida</h2>
			<p class="text-justify">
				El juego comienza cuando 4 jugadores hayan ingresado a una partida creada. Una vez todos esten dentro de la partida la diversión comienza. Para determinar el orden de los turnos de los jugadores, se juega una ronda rápida inicial, en un próximo apartado se explicarán en que consisten las rondas rápidas, una vez determinado el orden de juego comenzando por el primer jugador.
			</p>
		</div>
		<div class="row" id="cadaTurno">
			<h2>Turno A Turno</h2>
			<p class="text-justify">
				Durante cada turno todo comienza lanzando un dado de colores de 4 caras, cada color representa a las casillas del tablero y estas a su vez según el color que tengan representan cada una de las categorías de las preguntas que contiene el juego. Estas categorías son: ciencia y tecnología, Deportes, cine y tv y (la que no me acuerdo nunca xD). Según el resultado del dado, el avatar del jugador se moverá hasta la casilla con el color correspondiente, una vez en la casilla al jugador le aparecerá una pregunta con 4 opciones para seleccionar de la categoría correspondiente elegida de forma aleatoria. El jugador tendrá 30 segundos para responder a la pregunta, en caso de responder correctamente el jugador continuará el turno y podra lanzar el dado nuevamente, en caso contrario de que el jugador no logre responder a la pregunta el turno del jugador terminará y para el proximo turno deberá responder una pregunta de la misma categoría para poder avanzar. En caso de que un jugador caiga en una casilla donde se encuentra otro jugador esto comenzará una batalla(las batallas tendran su propio apartado más adelante). 
			</p>
		</div>
		<div class="row" id="batallas">
			<h2>¡Batallas!</h2>
			<p class="text-justify">
				Una batalla ocurre cuándo un jugador cae en una casilla donde se encuentra otro jugador. La batalla se desarrolla de la siguiente forma, se hace una pregunta de la categoría correspondiente a ambos jugadores al mismo tiempo, son de la misma forma 4 opciones y con 30 segundos de tiempo límite. El que responda correctamente en menos tiempo ganará la batalla. El ganador de la batalla tendrá 2 opciones o avanzar 2 espacios extras o hacer retroceder al contrincante 2 espacios. En caso de que el ganador de la batalla sea el jugador que tenía el turno, este luego de cobrar su recompensa lanzará el dado de nuevo y seguirá jugando normalmente, en caso de que el ganador de la batalla sea el jugador que no tenia el turno luego de que cobre su recompensa, el juego continuará su curso natural de turnos.
			</p>
		</div>
		<div class="row" id="royalBattle">
			<h2>¡Batalla Real!(Royal battle)</h2>
			<p class="text-justify">
				La batalla real es un evento especial, sigue las reglas de una batalla normal solo que participan los 4 jugadores, la condición para que se de este tipo de batalla es una casilla especial que se encuentra cerca del final del tablero y que es inevitable, es decir aunque el resultado del dado fuera suficiente para sobrepasar la casilla, el jugador activará el evento y se moverá solo hasta esta casilla especial. Durante esta batalla participarán los 4 jugadores, si el jugador que tenía el turno originalmente es el ganador de la batalla, podrá cobrar la recompensa de una batalla normal o avanzar el 2 espacios o hacer retroceder a todos los demas 2 espacios, luego de esto continuará su turno lanzando el dado nuevamente. En caso contrario de que alguno de los otros jugadores gane la batalla podrá decidir si retroceder al jugador que tenia el turno originalmente o avanzar el 2 casillas. Si un jugador se encuentra en esta casilla porque perdió la batalla real durante su turno, al comenzar su propió turno reactivará el evento, en resumen para ganar la partida se debe ganar al menos 1 batalla real durante su turno.
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