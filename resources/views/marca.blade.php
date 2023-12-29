<h2>Agregar nueva marca</h2>
<form method="post" action="{{ route('guardar_marca') }}">
    @csrf
    <label for="marca">Marca:</label>
    <input type="text" name="marca" id="marca">
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