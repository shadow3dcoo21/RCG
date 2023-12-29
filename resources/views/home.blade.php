@extends('layouts.app')

@section('content')
SSS
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-primary" role="alert">
                    This is a primary alert—check it out!
                    </div>
                    @endif

                    <div class="alert alert-primary" role="alert">
                    This is a primary alert—check it out!
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

Mi nombre es farid
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
