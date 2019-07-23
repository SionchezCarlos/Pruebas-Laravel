<!DOCTYPE html>
<html lang="es" dir="ltr">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="/css/CrudArchivosAjax.css" media="screen">

        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

		<!-- Compiled and minified ICONS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

		<title>CRUD Archivos Ajax</title>
	</head>
	<body>
		<div class="row container">
			<div class="col s12">
				<h4>Mis Visitas:</h4>
			</div>
		</div>

  		<div class="container">
  		  {{-- <form id="formulario" method="GET" enctype="multipart/form-data"> --}}
			{{-- @csrf --}}

  		    <div class="row">
  		      <div class="input-field col s6">
          		<input id="nombre" type="text">
          		<label for="nombre">Nombre</label>
  		      </div>
  		      <div class="input-field col s6">
          		<input id="ubicacion" type="text">
          		<label for="ubicacion">Ubicación</label>
  		      </div>
  		    </div>

  		    <div class="row">
    			<div class="input-field col s12">
    			     <textarea id="nota" class="materialize-textarea"></textarea>
    			     <label for="nota">Nota</label>
    			</div>
  		    </div>

  		    <div class="row">
  		      <div class="input-field col s12">
    			<div class="file-field input-field">
    			  <div class="btn">
    			    <span>Foto</span>
    			    <input type="file">
    			  </div>
    			  <div class="file-path-wrapper">
    			    <input class="file-path" type="text">
    			  </div>
    			</div>
  		      </div>
  		    </div>

  		  {{-- </form> --}}

  		    <button class="btn waves-effect waves-light" type="submit" name="action" onclick="enviar()">Enviar
    			<i class="material-icons right">send</i>
  			</button>

  		    <div class="row margin-default">
    			<div class="col s4">
    			  <div class="card">
    			    <div class="card-image">
    			      <img src="#">
    			      <span class="card-title">Nombre(s) y Apellido(s)</span>
    			    </div>
    			    <div class="card-content">
    			      <p>Texto de prueba.</p>
    			    </div>
    			    <div class="card-action">
    			      <a href="#">Más</a>
    			    </div>
    			  </div>
    			</div>

    			<div class="col s4">
    			  <div class="card">
    			    <div class="card-image">
    			      <img src="#">
    			      <span class="card-title">Nombre(s) y Apellido(s)</span>
    			    </div>
    			    <div class="card-content">
    			      <p>Texto de prueba.</p>
    			    </div>
    			    <div class="card-action">
    			      <a href="#">Más</a>
    			    </div>
    			  </div>
    			</div>

    			<div class="col s4">
    			  <div class="card">
    			    <div class="card-image">
    			      <img src="#">
    			      <span class="card-title">Nombre(s) y Apellido(s)</span>
    			    </div>
    			    <div class="card-content">
    			      <p>Texto de prueba.</p>
    			    </div>
    			    <div class="card-action">
    			      <a href="#">Más</a>
    			    </div>
    			  </div>
    			</div>

  			</div>

  		</div>

	</body>
</html>

{{-- Jquery 3.4.1 --}}
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<script>
	function enviar(){
		var nombre = $('#nombre').val();
		var ubicacion = $('#ubicacion').val();
		var nota = $('#nota').val();

		alert(apellidos+' '+nombres+' '+nota);
	}
</script>
