
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @vite(['resources/css/style.css'])
    @vite(['resources/css/adminlte.min.css'])
    <link href="{{ asset('all.min.css') }}" rel="stylesheet">
    @vite(['resources/css/OverlayScrollbars.min.css'])
    @vite(['resources/js/adminlte.js'])
    @vite(['resources/js/jquery.min.js'])
</head>
<body>
<!-- Cargar la pantalla -->
<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>
<div class="filtro">
    <div class="resultado_filtro">
            <form action="{{ route('filtro') }}" method="GET">
            <label for="categoria">Selecciona una categoría:</label>
            <select name="categoria" id="categoria">
                <option value="">Todas las categorías</option>
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
                @endforeach
            </select>

            <label for="marca">Selecciona una marca:</label>
            <select name="marca" id="marca">
                <option value="">Todas las marcas</option>
                @foreach($marcas as $marca)
                    <option value="{{ $marca->id }}">{{ $marca->marca }}</option>
                @endforeach
            </select>

            <button type="submit">Filtrar</button>
        </form>

    </div>
</div>



<div class="general_filtro">
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
    
            






            <form action="{{ route('filtro') }}" method="GET">

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
            @foreach($detalles as $detalle)

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
                        <button type="button" class="btn detealles_butt" data-toggle="modal" data-target="#exampleModal">
                        Ver Detalles
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
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




<div class="filtro">
    <div class="resultado_filtro">
        <form action="{{ route('filtro') }}" method="GET">
            <label>Selecciona una categoría:</label><br>
            @foreach($categorias as $categoria)
                <input type="radio" name="categoria" id="categoria{{ $categoria->id }}" value="{{ $categoria->id }}">
                <label for="categoria{{ $categoria->id }}">{{ $categoria->categoria }}</label><br>
            @endforeach

            <label>Selecciona una marca:</label><br>
            @foreach($marcas as $marca)
                <input type="radio" name="marca" id="marca{{ $marca->id }}" value="{{ $marca->id }}">
                <label for="marca{{ $marca->id }}">{{ $marca->marca }}</label><br>
            @endforeach

            <button type="submit">Filtrar</button>
        </form>
    </div>
</div>





<script src="JS/jquery-3.2.1.slim.min.js"></script>
<script src="JS/jquery.min.js"></script>
<script src="JS/popper.min.js"></script>
<script src="JS/bootstrap.min.js"></script>








  
    
</body>
</html>




