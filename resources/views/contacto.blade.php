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
								
									<h5 class=" titulo_slider_nosotros">Contacto</h5>
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
		
				<img class="slider-fondoentero1" src="imagenes/slider-12.jpg" alt="First slide">
			
		</div>

	</div>

<div class="sub_titulo">

</div>

<div class="Contenedor_general_contacto">
    <div class="contacto_ancho">
        <!--Section: Contact v.2-->
        <section class="mb-4">

            <!--Section heading-->
            <h2 class="h1-responsive font-weight-bold text-center my-4">Contacto</h2>
            <!--Section description-->
            <p class="text-center w-responsive mx-auto mb-5">.</p>

            <div class="row">

                <!--Grid column-->
                <div class="col-md-9 mb-md-0 mb-5">
                    <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="name" name="name" class="form-control">
                                    <label for="name" class="">Nombre</label>
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="email" name="email" class="form-control">
                                    <label for="email" class="">Correo</label>
                                </div>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="subject" name="subject" class="form-control">
                                    <label for="subject" class="">Nombre empresa</label>
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-12">

                                <div class="md-form">
                                    <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                    <label for="message">Mensaje</label>
                                </div>

                            </div>
                        </div>
                        <!--Grid row-->

                    </form>

                    <div class="text-center text-md-left">
                        <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Enviar</a>
                    </div>
                    <div class="status"></div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-3 text-center">
                    <ul class="list-unstyled mb-0">
                        <li><i class="fas fa-map-marker-alt fa-2x"></i>
                            <p>San Francisco, CA 94126, USA</p>
                        </li>

                        <li><i class="fas fa-phone mt-4 fa-2x"></i>
                            <p>+ 01 234 567 89</p>
                        </li>

                        <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                            <p>contact@mdbootstrap.com</p>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

            </div>

        </section>
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




   
@endsection
<script src="JS/jquery-3.2.1.slim.min.js"></script>
<script src="JS/jquery.min.js"></script>
<script src="JS/popper.min.js"></script>
<script src="JS/bootstrap.min.js"></script>

    </body>