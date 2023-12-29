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
    </head>
    <body>
	<div class="preloader flex-column justify-content-center align-items-center cargador">
        <img class="animation__wobble" src="imagenes/Logotipo Final-07.png" alt="AdminLTELogo" height="400" width="400">
    </div>
    <div class="fixeddddd">
    @extends('layouts.app')
    </div>

@section('content')
 <!--SLIDER AUTOMATICO-->
<header class="slider-width-1">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
									
										  <!--<ol class="carousel-indicators">
										    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
										    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
										    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
										  </ol>-->
									<!--TARJETA DE BIENVENIDA A MIRANDA Y REYES-->
									 <div class="carousel-inner slider-fondoentero">
									    <div class="carousel-item active ">

											<!--TARJETA-->
												<div class="text-center tamaño-tarjeta">
													<div class="tamaño-tarjeta-dentro">
														
														<div class="centrar-contenido centrar-movil">
															
															<br>
															
																<h5 class=" h5-slider-new">Primer Slider</h5>
																<p class="p-slider-new">Lorem ipsum dolor sit amet.
																	Est quidem animi et minima animi eum voluptatem 
																	nihil a sunt molestias et galisum omnis est unde 
																	debitis. Ut aspernatur tempora et nihil cupiditate 
																	ea exercitationem sint sed animi eligendi cum neque 
																	nostrum.

																	Ut mollitia minus et deleniti numquam quo nobis ipsam
																	UNICON marca hito histórico suministrando más de un millón de m3 de concreto para la Línea 2 del Metro de Lima.</p>
																 
																	<div class="boton_slider1">
															
																	<a href="hcategory/maquinas-miranda-reyes.php" class="boton_slider_interior">Conoce mas sobre Nosotros</a>


																	<!--<a href="hcategory/maquinas-miranda-reyes.php" class="btn-sli btn-primary">Ver Maquinaria</a>-->
																	</div>

														</div>
														
														<div class="card-footer text-muted centrar-contenido-footer">
															2 de agosto
														</div>
													</div>
												</div>
												<!--FIN TARJETA -->
                                                
									      <img class="slider-fondoentero1" src="imagenes/slider-13.jpg" alt="First slide">
									 </div>
									<!--TARJETA DE BIENVENIDA A MIRANDA Y REYES-->

									<!--TARJETA DE INFORMACION A MIRANDA Y REYES-->
									    <div class="carousel-item slider-fondoentero">
											<!-- TARJETA -->
									    	<div class="card text-center tamaño-tarjeta">
											<div class="tamaño-tarjeta-dentro">
														
														<div class="centrar-contenido centrar-movil">
															
															<br>
															<hr class="hr">
																<h5 class=" h5-slider-new">Segundo Slider</h5>
																<p class="p-slider-new">Lorem ipsum dolor sit amet.
																	Est quidem animi et minima animi eum voluptatem 
																	nihil a sunt molestias et galisum omnis est unde 
																	debitis. Ut aspernatur tempora et nihil cupiditate 
																	ea exercitationem sint sed animi eligendi cum neque 
																	nostrum.

																	Ut mollitia minus et deleniti numquam quo nobis ipsam
																	UNICON marca hito histórico suministrando más de un millón de m3 de concreto para la Línea 2 del Metro de Lima.</p>
																 
																	<div class="boton_slider1">
															
																	<a href="hcategory/maquinas-miranda-reyes.php" class="boton_slider_interior">Conoce mas sobre Nosotros</a>


																	<!--<a href="hcategory/maquinas-miranda-reyes.php" class="btn-sli btn-primary">Ver Maquinaria</a>-->
																	</div>

														</div>
														
														<div class="card-footer text-muted centrar-contenido-footer">
															2 de agosto
														</div>
													</div>
												</div>
											  <!--FIN TARJETA -->
									      <img class="d-block slider-fondoentero1" src="imagenes/slider-9.jpeg" alt="Second slide">
										      
										</div>
									<!--FIN TARJETA DE INFORMACION A MIRANDA Y REYES-->

									    <div class="carousel-item slider-fondoentero">
									    	<!--TARJETA-->
												<div class="text-center tamaño-tarjeta">
													<div class="tamaño-tarjeta-dentro">
														
														<div class="centrar-contenido centrar-movil">
															
															<br>
															<hr class="hr">
																<h5 class=" h5-slider-new">Tercer Slider</h5>
																<p class="p-slider-new">Lorem ipsum dolor sit amet.
																	Est quidem animi et minima animi eum voluptatem 
																	nihil a sunt molestias et galisum omnis est unde 
																	debitis. Ut aspernatur tempora et nihil cupiditate 
																	ea exercitationem sint sed animi eligendi cum neque 
																	nostrum.

																	Ut mollitia minus et deleniti numquam quo nobis ipsam
																	UNICON marca hito histórico suministrando más de un millón de m3 de concreto para la Línea 2 del Metro de Lima.</p>
																 
																	<div class="boton_slider1">
															
																	<a href="hcategory/maquinas-miranda-reyes.php" class="boton_slider_interior">Conoce mas sobre Nosotros</a>


																	<!--<a href="hcategory/maquinas-miranda-reyes.php" class="btn-sli btn-primary">Ver Maquinaria</a>-->
																	</div>

														</div>
														
														<div class="card-footer text-muted centrar-contenido-footer">
															2 de agosto
														</div>
													</div>
												</div>
												<!--FIN TARJETA -->
									      <img class="d-block slider-fondoentero1" src="imagenes/slider-16.jpg" alt="Second slide">
										      
									    </div>
									    
									    

									  <a class="carousel-control-prev izquierdo-slider" href="#carouselExampleIndicators" role="button" data-slide="prev">
									    <span class="carousel-control-prev-icon izquierdo-slider2" aria-hidden="true"></span>
									    <span class="sr-only">Previous</span>
									  </a>
									  <a class="carousel-control-next izquierdo-slider" href="#carouselExampleIndicators" role="button" data-slide="next">
									    <span class="carousel-control-next-icon izquierdo-slider2" aria-hidden="true"></span>
									    <span class="sr-only">Next</span>
									  </a>
					</div>

	
</header>			
		<!--FIN-SLIDER AUTOMATICO-->

<div class="Logro_General">
			<div class="Logro_interior">
				<div class="interior_logro">
					<div class="Icono_Logros">

					</div>
					<div class="Contenido_Logro">

					</div>
				</div>
				<div class="interior_logro">
					<div class="Icono_Logros">
						
					</div>
					<div class="Contenido_Logro">
						
					</div>
				</div>
				<div class="interior_logro">
					<div class="Icono_Logros">
						
					</div>
					<div class="Contenido_Logro">
						
					</div>
				</div>
				<div class="interior_logro">
					<div class="Icono_Logros">
						
					</div>
					<div class="Contenido_Logro">
						
					</div>
				</div>



			</div>


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

   



        <SCript>
            
        </SCript>
        <script src="JS/jquery-3.2.1.slim.min.js"></script>
<script src="JS/popper.min.js"></script>
<script src="JS/bootstrap.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var myCarousel = document.querySelector('#carouselExampleIndicators');

        // Crea una instancia de carrusel de Bootstrap
        var carousel = new bootstrap.Carousel(myCarousel, {
            interval: 18500 // Establece el intervalo a 500 milisegundos (0.5 segundos)
        });
        // Configura el teclado para controlar el carrusel
    myCarousel.addEventListener('keydown', function(e) {
        if (e.key === 'ArrowLeft') {
            carousel.prev();
        } else if (e.key === 'ArrowRight') {
            carousel.next();
        }
    });

    // Añade el enfoque al carrusel para que las teclas funcionen de inmediato
    myCarousel.addEventListener('mouseover', function() {
        myCarousel.focus();
    });
        
    });


</script>        
@endsection

@section('content2') 
<header class="slider-width-1">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
									
										  <!--<ol class="carousel-indicators">
										    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
										    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
										    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
										  </ol>-->
									<!--TARJETA DE BIENVENIDA A MIRANDA Y REYES-->
									 <div class="carousel-inner slider-fondoentero">
									    <div class="carousel-item active ">

											<!--TARJETA-->
												<div class="text-center tamaño-tarjeta">
													<div class="tamaño-tarjeta-dentro">
														
														<div class="centrar-contenido centrar-movil">
															
															<br>
															<hr class="hr">
																<h5 class=" h5-slider-new">Primer Slider</h5>
																<p class="p-slider-new">Lorem ipsum dolor sit amet.
																	Est quidem animi et minima animi eum voluptatem 
																	nihil a sunt molestias et galisum omnis est unde 
																	debitis. Ut aspernatur tempora et nihil cupiditate 
																	ea exercitationem sint sed animi eligendi cum neque 
																	nostrum.

																	Ut mollitia minus et deleniti numquam quo nobis ipsam
																	UNICON marca hito histórico suministrando más de un millón de m3 de concreto para la Línea 2 del Metro de Lima.</p>
																 
																	<div class="boton_slider1">
															
																	<a href="hcategory/maquinas-miranda-reyes.php" class="boton_slider_interior">Conoce mas sobre Nosotros</a>


																	<!--<a href="hcategory/maquinas-miranda-reyes.php" class="btn-sli btn-primary">Ver Maquinaria</a>-->
																	</div>

														</div>
														
														<div class="card-footer text-muted centrar-contenido-footer">
															2 de agosto
														</div>
													</div>
												</div>
												<!--FIN TARJETA -->
                                                
									      <img class="slider-fondoentero1" src="imagenes/slider-13.jpg" alt="First slide">
									 </div>
									<!--TARJETA DE BIENVENIDA A MIRANDA Y REYES-->

									<!--TARJETA DE INFORMACION A MIRANDA Y REYES-->
									    <div class="carousel-item slider-fondoentero">
											<!-- TARJETA -->
									    	<div class="card text-center tamaño-tarjeta">
											<div class="tamaño-tarjeta-dentro">
														
														<div class="centrar-contenido centrar-movil">
															
															<br>
															<hr class="hr">
																<h5 class=" h5-slider-new">Segundo Slider</h5>
																<p class="p-slider-new">Lorem ipsum dolor sit amet.
																	Est quidem animi et minima animi eum voluptatem 
																	nihil a sunt molestias et galisum omnis est unde 
																	debitis. Ut aspernatur tempora et nihil cupiditate 
																	ea exercitationem sint sed animi eligendi cum neque 
																	nostrum.

																	Ut mollitia minus et deleniti numquam quo nobis ipsam
																	UNICON marca hito histórico suministrando más de un millón de m3 de concreto para la Línea 2 del Metro de Lima.</p>
																 
																	<div class="boton_slider1">
															
																	<a href="hcategory/maquinas-miranda-reyes.php" class="boton_slider_interior">Conoce mas sobre Nosotros</a>


																	<!--<a href="hcategory/maquinas-miranda-reyes.php" class="btn-sli btn-primary">Ver Maquinaria</a>-->
																	</div>

														</div>
														
														<div class="card-footer text-muted centrar-contenido-footer">
															2 de agosto
														</div>
													</div>
												</div>
											  <!--FIN TARJETA -->
									      <img class="d-block slider-fondoentero1" src="imagenes/slider-9.jpeg" alt="Second slide">
										      
										</div>
									<!--FIN TARJETA DE INFORMACION A MIRANDA Y REYES-->

									    <div class="carousel-item slider-fondoentero">
									    	<!--TARJETA-->
												<div class="text-center tamaño-tarjeta">
													<div class="tamaño-tarjeta-dentro">
														
														<div class="centrar-contenido centrar-movil">
															
															<br>
															<hr class="hr">
																<h5 class=" h5-slider-new">Tercer Slider</h5>
																<p class="p-slider-new">Lorem ipsum dolor sit amet.
																	Est quidem animi et minima animi eum voluptatem 
																	nihil a sunt molestias et galisum omnis est unde 
																	debitis. Ut aspernatur tempora et nihil cupiditate 
																	ea exercitationem sint sed animi eligendi cum neque 
																	nostrum.

																	Ut mollitia minus et deleniti numquam quo nobis ipsam
																	UNICON marca hito histórico suministrando más de un millón de m3 de concreto para la Línea 2 del Metro de Lima.</p>
																 
																	<div class="boton_slider1">
															
																	<a href="hcategory/maquinas-miranda-reyes.php" class="boton_slider_interior">Conoce mas sobre Nosotros</a>


																	<!--<a href="hcategory/maquinas-miranda-reyes.php" class="btn-sli btn-primary">Ver Maquinaria</a>-->
																	</div>

														</div>
														
														<div class="card-footer text-muted centrar-contenido-footer">
															2 de agosto
														</div>
													</div>
												</div>
												<!--FIN TARJETA -->
									      <img class="d-block slider-fondoentero1" src="imagenes/slider-16.jpg" alt="Second slide">
										      
									    </div>
									    
									    

									  <a class="carousel-control-prev izquierdo-slider" href="#carouselExampleIndicators" role="button" data-slide="prev">
									    <span class="carousel-control-prev-icon izquierdo-slider2" aria-hidden="true"></span>
									    <span class="sr-only">Previous</span>
									  </a>
									  <a class="carousel-control-next izquierdo-slider" href="#carouselExampleIndicators" role="button" data-slide="next">
									    <span class="carousel-control-next-icon izquierdo-slider2" aria-hidden="true"></span>
									    <span class="sr-only">Next</span>
									  </a>
					</div>
</header>
@endsection
        
<script src="JS/jquery-3.2.1.slim.min.js"></script>
<script src="JS/jquery.min.js"></script>
<script src="JS/popper.min.js"></script>
<script src="JS/bootstrap.min.js"></script>



    </body>
</html>
