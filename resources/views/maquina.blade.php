<h2>Agregar nueva máquina</h2>
<form method="post" action="{{ route('guardar_maquina') }}">
    @csrf
    <label for="maquina">Nombre de la Maquina:</label>
    <input type="text" name="maquina" id="maquina">
    <br><br>
    <label for="id_categoria">Categoría:</label>
    <select name="id_categoria" id="id_categoria">
        @foreach ($categorias as $categoria)
            <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
        @endforeach
    </select>
    <br><br>
    <label for="id_marca">Marca:</label>
    <select name="id_marca" id="id_marca">
        @foreach ($marcas as $marca)
            <option value="{{ $marca->id }}">{{ $marca->marca }}</option>
        @endforeach
    </select>
    <br><br>
    <label for="ruta_imagen">Ruta de la imagen:</label>
    <input type="text" name="ruta_imagen" id="ruta_imagen">
    <br><br>
    <input type="submit" value="Guardar">
</form>

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

<h2>Agregar nuevos datos</h2>
<ul>
    <li><a href="{{ route('categoria') }}">Agregar nueva categoría</a></li>
    <li><a href="{{ route('marca') }}">Agregar nueva marca</a></li>
    <li><a href="{{ route('maquina') }}">Agregar nueva máquina</a></li>
</ul>