<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		
        <!-- Styles -->
        <style>
            .fixeddddd{
                position: absolute;
            }
        </style>
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @vite(['resources/css/style.css'])
    @vite(['resources/css/adminlte.min.css'])
	<link href="{{ asset('all.min.css') }}" rel="stylesheet">
    @vite(['resources/css/OverlayScrollbars.min.css'])
    @vite(['resources/js/adminlte.js'])
    @vite(['resources/js/jquery.min.js'])
	<script>
		
	</script>
    <style>
.filterDiv {
  float: left;
  background-color: #d9bb21;
  color: #ffffff;
  width: 100px;
  line-height: 100px;
  text-align: center;
  margin: 2px;
  display: none;
}

.show {
  display: block;
}

.container {
  margin-top: 20px;
  overflow: hidden;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: #f1f1f1;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}
</style>
    </head>
    <body>
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__wobble" src="imagenes/Logotipo Final-07.png" alt="AdminLTELogo" height="400" width="400">
    </div>
    <div class="fixeddddd">
    @extends('layouts.app')
    </div>
	@section('content')

    <div class="slider_nosotros">

		<div class="contenedor_slider_nosotros">

				<!--TARJETA-->
					<div class="degradado_nosotros">
						<div class="contenedor_texto_nosotros">
							
							<div class="texto_centrado centrar-movil">
								
								<br>
								
									<h5 class=" titulo_slider_nosotros">Agregados</h5>
									<p class="texto_slider_nosotros">Lorem ipsum dolor sit amet.
										Est quidem animi et minima animi eum voluptatem 
										nihil a sunt molestias et galisum omnis est unde 
										debitis. Ut aspernatur tempora et nihil cupiditate 
										ea exercitationem sint sed animi eligendi cum neque 
										nostrum.

										Ut mollitia minus et deleniti numquam quo nobis ipsam
										UNICON marca hito histórico suministrando más de un millón de m3 de concreto para la Línea 2 del Metro de Lima.</p>
									
										
								

							</div>
							
							
						</div>
						
					</div>
					<!--FIN TARJETA -->
		
				<img class="slider-fondoentero1" src="imagenes/slider-11.jpg" alt="First slide">
			
		</div>

	</div>

<div class="sub_titulo">

</div>

<div class="filtro">
<h2>Filtro experimental </h2>

<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Todo</button>
  <button class="btn" onclick="filterSelection('Tractor')"> Tractor</button>
  <button class="btn" onclick="filterSelection('Camiones')">Camiones</button>
  <button class="btn" onclick="filterSelection('otra maquina')"> otra maquina</button>
  <button class="btn" onclick="filterSelection('etc')"> etc</button>
</div>

<div class="container">
  <div class="filterDiv Tractor">Tractor1</div>
  <div class="filterDiv Tractor">Tractor2</div>
  <div class="filterDiv Tractor">Tractor3</div>
  <div class="filterDiv Tractor">Tractor4</div>
  <div class="filterDiv Camiones">Camion1</div>
  <div class="filterDiv Camiones">Camion2</div>
  <div class="filterDiv Camiones">Camion3</div>
  <div class="filterDiv Camiones">Camion4</div>
  <div class="filterDiv otra maquina">otra maquina</div>
  <div class="filterDiv otra maquina">otra maquina</div>
  <div class="filterDiv etc">etc</div>
  <div class="filterDiv etc">etc</div>
  <div class="filterDiv etc">etc</div>
</div>

<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

</div>









<footer class="footer_general">
	<div class="footer_contenedor">
		<div class="int_footer">
			<div class="logo_footer"><img src="{{ asset('imagenes/Logotipo Final-12.png') }}" alt="Texto alternativo"></div>
		</div>
		<div class="int_footer">
			<div class="contenedor_menu_footer">
							<div class="present_footer" id="inicio"><a class="nav-text2" href="{{ route('welcome') }}">Inicio</a></div>
                            <div class="present_footer" id="nosotros"><a class="nav-text2" href="{{ route('nosotros') }}">Nosotros</a></div>
                            <div class="present_footer" id="alquiler"><a class="nav-text2" href="{{ route('alquiler') }}">Alquiler</a></div>
                            <div class="present_footer" id="agregados"><a class="nav-text2" href="{{ route('agregados') }}">Agregados</a></div>
                            <div class="present_footer" id="proyectos"><a class="nav-text2"href="{{ route('nosotros') }}">Proyectos</a></div>
                            <div class="present_footer" id="trabaja"><a class="nav-text2" href="{{ route('nosotros') }}">Trabaja con nosotros</a></div>
                            <div class="present_footer" id="contacto"><a class="nav-text2" href="{{ route('contacto') }}">Contacto</a></div>
			</div>					
		</div>
		<div class="int_footer">
			<div class="contenedor_contact_footer">
				<div class="contacto_footer">
					<div class="contactanos">Contactanos</div>
				</div>
				<div class="contactar etc">
					
				</div>
			</div>
			
			
		</div>
		<div class="int_footer">
		<div class="contenedor_contact_footer">
				<div class="contacto_footer">
					<div class="contactanos">Sede</div>
				</div>
				<div class="contactar etc">
					
				</div>
			</div>
		</div>
		<div class="int_footer">
			<div class="contenedor_contact_footer">
					<div class="contacto_footer">
						<div class="contactanos">Redes Sociales</div>
					</div>
					<div class="contactar etc">
						
					</div>
				</div>
		</div>
	</div>
	
</footer>





   
@endsection
<script src="JS/jquery-3.2.1.slim.min.js"></script>
<script src="JS/jquery.min.js"></script>
<script src="JS/popper.min.js"></script>
<script src="JS/bootstrap.min.js"></script>

    </body>