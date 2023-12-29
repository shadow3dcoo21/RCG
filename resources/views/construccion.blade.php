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
	<script>
		
	</script>
    </head>
    <body>

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
								
									<h5 class=" titulo_slider_nosotros">Construccion</h5>
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
		
				<img class="slider-fondoentero1" src="imagenes/slider-13.jpg" alt="First slide">
			
		</div>

	</div>

<div class="sub_titulo">

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


    </body>