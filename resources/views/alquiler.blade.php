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



<div class="Tarjeta_Presenta">
    
    <div class="slider_nosotros_alquiler">

		<div class="contenedor_slider_nosotros">

				
					<div class="degradado_alquiler">
						<div class="contenedor_texto_alquiler">
							
							<div class="texto_centrado_alquiler centrar-movil">
								
								
								
									<h5 class=" titulo_slider_alquiler">Alquiler de Maquinaria</h5>
									
									
										
								

							</div>
							
							
						</div>
						
					</div>
					
		
				<img class="slider-fondoentero_alquiler" src="imagenes/slider-20.jpg" alt="First slide">
			
		</div>

	</div>


</div>



<div id="resultadoFiltrado" class="general_filtro">
    <aside class="aside_filter sidebar-dark-primary">
            

            <!-- Sidebar -->
            <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
                </div>
            </div>

            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
        
                






                <form action="{{ route('alquiler') }}" method="GET">

                <li class="nav-header">FILTRAR POR : .<button type="submit" class="btn btn-warning">Filtrar</button></li>
                
                            
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        CATEGORIAS
                        <i class="fas fa-angle-left right"></i>
                        <span class="badge badge-info right">6</span>
                    </p>
                    </a>

                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                            <input type="checkbox" class="btn-check" id="btn-check-outlined" autocomplete="off">
                            <label class="btn btn-outline-danger" for="btn-check-outlined">Todas Las Categorias</label><br>
                            <li class="nav-header">Seleccionar una Categoria:</li>
                            </li>
                            @foreach($categorias as $categoria)
                            <li class="nav-item">
                            <i class="far nav-icon"></i>
                                <input type="radio"  class="btn-check"  autocomplete="off" name="categoria" id="categoria{{ $categoria->id }}" value="{{ $categoria->id }}">
                                <label class="btn btn-outline-success" for="categoria{{ $categoria->id }}">{{ $categoria->categoria }}</label><br>
                                </li>
                            @endforeach

                    </ul>


                </li>
                

                <li class="nav-item menu-open">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>
                        MARCAS
                        <i class="fas fa-angle-left right"></i>
                        <span class="badge badge-info right">6</span>
                    </p>
                    </a>


                    <ul class="nav nav-treeview">
                    
                    
                            <input type="radio" class="btn-check" name="options-outlined" id="btn-check-outlined2" autocomplete="off">
                            <label class="btn btn-outline-danger" for="btn-check-outlined2">Todas Las Marcas</label><br>
                            <li class="nav-header">Seleccionar una Marca:</li>
                            @foreach($marcas as $marca)
                            <li class="nav-item">
                            <i class="far nav-icon"></i>
                                <input type="radio" class="btn-check" autocomplete="off" name="marca" id="marca{{ $marca->id }}" value="{{ $marca->id }}">
                                <label class="btn btn-outline-success" for="marca{{ $marca->id }}">{{ $marca->marca }}</label><br>
                            </li>
                            @endforeach

                    </ul>
                </li>
                </form>

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
    </aside>
    <div class="contenedor_gen">

        @if(count($detalles) > 0)
            @foreach($detalles as $index => $detalle)

                <div class="contenedor_imagenes">
                    <div class="imagen_maquina">
                        <img class="imagen_maquina_filtro" src="{{ $detalle->maquina->ruta_imagen }}" alt="Texto alternativo">
                    </div>
                    
                    <div class="categoria_modelo">
                        <div class="marca-minidetalle">{{ $detalle->marca->marca }}</div>
                        <div class="maquina-minidetalle">{{ $detalle->maquina->maquina }} {{ $detalle->modelo }}</div>
                        
                    </div>
                    <div class="mini_datalles">
                        <div><li class="lists">Potencia :</li></div>
                        <div><li class="lists">Capacidad :</li></div>
                        <div><li class="lists">Peso Operacion :</li></div>
                        
                        
                    
                    </div>
                    <div class="Boton_general_maquinas_filtro">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn detealles_butt" data-toggle="modal" data-target="#exampleModal{{ $index }}">
                        Ver Detalles
                        </button>
                      

                        <!-- Modal -->
                        <div class="modal fade general_modal" id="exampleModal{{ $index }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <!-- ... (Tu código existente) ... -->
                            <div class="modal-dialog custom-width" role="document">
                                
                                <div class="modal-content">
                                    <div class="x_boton">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                        


                                    <div class="contenedor_detalles__">

                                        <div class="mismo_detal titulo_imagen_maqui">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">{{ $detalle->maquina->maquina }} {{ $detalle->modelo }}</h5>
                                                
                                            </div>
                                            <div class="modal-body">
                                            <img class="imagen_maquina_filtro" src="{{ $detalle->maquina->ruta_imagen }}" alt="Texto alternativo">
                                            </div>

                                        </div>

                                        <div class=" mismo_detal detalles_maq_fija">

                                        </div>

                                        

                                    </div>
                                    
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                        
                                    </div> 
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            
           
                        
            @endforeach
        @else
            <p>No hay resultados para mostrar.</p>
        @endif
    </div>
</div>
<script src="JS/jquery-3.2.1.slim.min.js"></script>
<script src="JS/jquery.min.js"></script>
<script src="JS/popper.min.js"></script>
<script src="JS/bootstrap.min.js"></script>


<script>
    function handleButtonClick() {
        // Envía el formulario
        document.getElementById('filterForm').submit();

        // Desplázate al anclaje después de 1 segundo para asegurarte de que el envío se complete
        setTimeout(function() {
            window.location.href = '#resultadoFiltrado';
        }, 1000); // Puedes ajustar el tiempo en milisegundos según tus necesidades
    }
</script>











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