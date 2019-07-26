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

	{{-- Menu - { --}}
{{--   		<nav>
  		  <div class="nav-wrapper">
  		    <a href="#!" class="brand-logo center">Logo</a>
  		    <ul class="left hide-on-med-and-down">
  		      <li><a href="sass.html">Sass</a></li>
  		      <li><a href="badges.html">Components</a></li>
  		      <li class="active"><a href="collapsible.html">JavaScript</a></li>
  		    </ul>
  		  </div>
  		</nav> --}}
  	{{-- Menu - { --}}

	{{-- Formulario - { --}}
	 	<div class="row container">
			<div class="col s12">
				<h4>Mis Visitas:</h4>
			</div>
		</div>

  		<div class="container">

  		    <div class="row">
  		      <div class="input-field col s6">
          		<input id="nombre" name="nombre" type="text">
          		<label for="nombre">Nombre</label>
  		      </div>
  		      <div class="input-field col s6">
          		<input id="ubicacion" name="ubicacion" type="text">
          		<label for="ubicacion">Ubicación</label>
  		      </div>
  		    </div>

  		    <div class="row">
    			<div class="input-field col s12">
    			     <textarea id="nota" name="nota" class="materialize-textarea"></textarea>
    			     <label for="nota">Nota</label>
    			</div>
  		    </div>

  		    <div class="row">
  		      <div class="input-field col s12">
    			<div class="file-field input-field">
    			  <div class="btn">
    			    <span>Foto</span>
    			    <input id="foto" name="foto[]" type="file">
    			  </div>
    			  <div class="file-path-wrapper">
    			    <input class="file-path" type="text">
    			  </div>
    			</div>
  		      </div>
  		    </div>

			<button class="btn waves-effect waves-light" id="guardar" name="guardar" type="submit" onclick="guardar()">Guardar</button>
  		</div>
  	{{-- Formulario - } --}}

  	{{-- Visitas - { --}}
  		<div class="container">
  			<div class="row margin-default">
  				@foreach($Visitas as $Vis)
    				<div class="col s4">
    			  		<div class="card">
    			    		<div class="card-image">
    			      			<img src="{{$Vis->foto}}">
    			      			<span class="card-title">{{$Vis->nombre}}</span>
    			    		</div>
    			    		<div class="card-content">
    			      			<p><b>Nota de Viaje:</b> {{$Vis->nota}}</p>
    			    		</div>
    			    	<div class="card-action">
    			    		<p><b>Ubicacion:</b> {{$Vis->ubicacion}}</p>
    			      		<p><b>Fecha:</b> {{date('d/m/Y', strtotime($Vis->created_at))}}</p>
    			    	</div>
    			  	</div>
    				</div>
    			@endforeach
  			</div>
  		</div>
	{{-- Visitas - } --}}

	{{-- Pie de pagina - { --}}
{{--   		<footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer> --}}
    {{-- Pie de pagina - } --}}

	</body>
</html>

{{-- Jquery 3.4.1 --}}
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<script>
	function guardar(){
		var nombre = $('#nombre').val();
		var ubicacion = $('#ubicacion').val();
		var nota = $('#nota').val();

		$.ajax({
			url: '/CRUDArchivosAJAX/CrudArchivosAjax/store',
			type: 'GET',
			data: {
				nombre: nombre, 
				ubicacion: ubicacion, 
				nota: nota,
			},
		})
		.done(function(data) {

			console.log(data.mensaje);

		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
	}
</script>
