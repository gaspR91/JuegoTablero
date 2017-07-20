<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registrar Preguntas</title>
	<link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body>
<div class="container-fluid" id="mainContainer">
	<header class="container" id="mainHeader">
		<h1>Registro de preguntas</h1>
	</header>
	<div class="container">
	<form id="registraPregunta">
		<div class="form-control">
			<label for="categoria">Selecione Categoría</label>
			<select>
				<option class="categoria" id="primera">Deportes</option>
				<option class="categoria" id="segunda">Historia</option>
				<option class="categoria" id="tercera">Matemáticas</option>
				<option class="categoria" id="cuarta">La otra</option>
			</select>
		</div>
		<div class="form-group">
			<label for="nuevaPregunta">Ingrese una nueva pregunta</label>
			<input type="text" class="form-control" id="nuevaPregunta" placeholder="preguntaNueva">
		</div>
		<div class="form-group">
			<label for="opcion1">Primera opción</label>
			<input type="text" class="form-control" id="opcion1" placeholder="opcion1">
		</div>
		<div class="form-group">
			<label for="opcion2">Segunda opción</label>
			<input type="text" class="form-control" id="opcion2" placeholder="	opcion2">
		</div>
		<div class="form-group">
			<label for="opcion3">Tercera opción</label>
			<input type="text" class="form-control" id="opcion3" placeholder="opcion3">
		</div>
		<div class="form-group">
			<label for="opcion4">Primera opción</label>
			<input type="text" class="form-control" id="opcion4" placeholder="opcion4">
		</div>
		<label for="respuestaCorrecta">Seleccione la opción correcta</label>
		<div class="container" id="respuestaCorrecta">
			<label class="radio-inline">
  				<input type="radio" name="opcion1" id="inlineRadio1" value="1"> 1
			</label>
			<label class="radio-inline">
  				<input type="radio" name="opcion2" id="inlineRadio2" value="2"> 2
			</label>
			<label class="radio-inline">
  				<input type="radio" name="opcion3" id="inlineRadio3" value="3"> 3
			</label>
			<label class="radio-inline">
  				<input type="radio" name="opcion4" id="inlineRadio4" value="4"> 4
			</label>
		</div>
	</form>
	</div>
</div>

</body>
</html>