<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @vite(['resources/css/style.css'])
</head>
<body>
<div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__wobble" src="imagenes/Logotipo Final-07.png" alt="AdminLTELogo" height="400" width="400">
    </div>
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="categoria">
    <div class="contenedor_general">
        <div class="contenedor_form">

            <h2 class="h2">Agregar nueva categoría</h2>
            <form method="post" action="{{ route('guardar_categoria') }}">
                @csrf
                
                <label class="subti" for="categoria">Categoría:</label>
                <input class="form-control" type="text" name="categoria" id="categoria" placeholder="Categoria">
                
                <br>
                <button type="submit" class="boton_categoria">Agregar</button>
                
            </form>

        </div>
        <div>-></div>
        <div class="contenedor_tabla">

            <p class="h2">Tabla Categorias</p>
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Categoria</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($categorias as $categoria)
                        <tr>
                            <td>{{ $categoria->id }}</td>
                            <td>{{ $categoria->categoria }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>
<br>
<div class="categoria">
    <div class="contenedor_general">
        <div class="contenedor_form">

            <h2 class="h2">Agregar nueva marca</h2>
            <form method="post" action="{{ route('guardar_marca') }}">
                @csrf
                <label class="subti" for="marca">Marca:</label>
                <input class="form-control" type="text" name="marca" id="marca" placeholder="Marca">
                <br>
                <button type="submit" class="boton_categoria">Agregar</button>
            </form>
        
        </div>
        <div>-></div>
        <div class="contenedor_tabla">

            <h2 class="h2">Marcas</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Marca</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($marcas as $marca)
                        <tr>
                            <td>{{ $marca->id }}</td>
                            <td>{{ $marca->marca }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            

        </div>
    </div>
</div>






<br>


<div class="categoria">
    <div class="contenedor_general">
        <div class="contenedor_form">

            <h2 class="h2">Agregar nueva máquina</h2>
            <form method="post" action="{{ route('guardar_maquina') }}" enctype="multipart/form-data">
                @csrf
                <label class="subti" for="maquina">Nombre de la Maquina:</label>
                <input class="form-control" type="text" name="maquina" id="maquina" placeholder="Nombre Maquina">
                <br>
                
                <label class="subti inline" for="id_categoria">Categoría:    <p class="p_list inline">Lista</p></label>
                <select name="id_categoria" id="id_categoria" class="form-control">
                    
                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
                    @endforeach
                </select>
                
                
                <br>

                
                <label class="subti inline" for="id_marca">Marca:    <p class="p_list inline">Lista</p></label>
                <select name="id_marca" id="id_marca" class="form-control">
                    
                    @foreach ($marcas as $marca)
                        <option value="{{ $marca->id }}">{{ $marca->marca }}</option>
                    @endforeach

                </select>

                <br>
                <label class="subti" for="ruta_imagen">Subir Imagen :</label>
                <input type="file" class="form-control" name="archivo">
                
                <br>
                <button type="submit" class="boton_categoria">Agregar</button>
                
            </form>
        
        </div>
        <div>-></div>
        <div class="contenedor_tabla">


            <h2 class="h2">Máquinas</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Máquina</th>
                        <th scope="col">Categoría</th>
                        <th scope="col">Marca</th>
                        <th  scope="col">Ruta de la imagen</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($maquinas as $maquina)
                        <tr>
                            <td class="td">{{ $maquina->id }}</td>
                            <td class="td">{{ $maquina->maquina }}</td>
                            <td class="td">{{ $maquina->categoria->categoria }}</td>
                            <td class="td">{{ $maquina->marca->marca }}</td>
                            
                            <td class="td"><img class="imagen_maquinas" src="{{ $maquina->ruta_imagen }}" alt="Texto alternativo"></td>
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>


            

        </div>
    </div>
</div>






<div class="categoria">
    <div class="contenedor_general">
        <div class="contenedor_form">

            <h2 class="h2">Agregar Detalles</h2>
            <form method="post" action="{{ route('guardar_detalle') }}" enctype="multipart/form-data">
                @csrf
                
                <br>
                
                <label class="subti inline" for="id_categoria">Categoría:    <p class="p_list inline">Lista</p></label>
                <select name="id_categoria" id="id_categoria" class="form-control">
                    
                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
                    @endforeach
                </select>

                <br>
                
                <label class="subti inline" for="id_maquina">Maquina:    <p class="p_list inline">Lista</p></label>
                <select name="id_maquina" id="id_maquina" class="form-control">
                    @foreach ($maquinas as $maquina)
                        <option value="{{ $maquina->id }}">{{ $maquina->maquina }}</option>
                    @endforeach
                </select>
                
                <br>

                
                <label class="subti inline" for="id_marca">Marca:    <p class="p_list inline">Lista</p></label>
                <select name="id_marca" id="id_marca" class="form-control">
                    
                    @foreach ($marcas as $marca)
                        <option value="{{ $marca->id }}">{{ $marca->marca }}</option>
                    @endforeach

                </select>
                
                <br>
                <label class="subti" for="modelo">Modelo:</label>
                <input class="form-control" type="text" name="modelo" id="modelo" placeholder="Modelo">

                <br>
                <label class="subti" for="cip">CIP:</label>
                <input class="form-control" type="text" name="cip" id="cip" placeholder="CIP">

                <br>
                <label class="subti" for="detalles_json">DETALLES:</label>
                <textarea name="detalles_json" id="detalles_json" rows="10" cols="40">Escribe aquí tus comentarios</textarea>
                
                
                <br>
                <button type="submit" class="boton_categoria">Agregar</button>
                
            </form>
        
        </div>
        <div>-></div>
        <div class="contenedor_tabla">


            <h2 class="h2">Máquinas</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Maquina</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Cip</th>
                        <th scope="col">Detalles</th>
                        
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($detalles as $detalle)
                        <tr>
                            <td>{{ $detalle->id }}</td>
                            <td class="td">
                                <img class="imagen_maquinas" src="{{ $detalle->maquina->ruta_imagen }}" alt="Texto alternativo">
                            </td>
                            <td>{{ $detalle->categoria->categoria }}</td>
                            <td>{{ $detalle->marca->marca }}</td>
                            <td>{{ $detalle->maquina->maquina }}</td>
                            <td>{{ $detalle->modelo }}</td>
                            <td>{{ $detalle->cip }}</td>
                            <td>{!! formatDetails(str_replace('"', '', $detalle->detalles_json)) !!}</td>
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>


            

        </div>
    </div>
</div>