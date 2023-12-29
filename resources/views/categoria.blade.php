<h2>Agregar nueva categoría</h2>
<form method="post" action="{{ route('guardar_categoria') }}">
    @csrf
    <label for="categoria">Categoría:</label>
    <input type="text" name="categoria" id="categoria">
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