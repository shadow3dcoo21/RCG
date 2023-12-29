<?php

namespace App\Http\Controllers;
use App\Models\Categoria;
use App\Models\Marca;
use App\Models\Maquina;

use Illuminate\Http\Request;

class MaquinaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        // Aquí es donde deberías colocar la lógica para obtener datos y pasarlos a la vista.
        // Por ejemplo, puedes obtener las categorías y marcas de tus modelos.

        $categorias = Categoria::all(); // Asumiendo que tienes un modelo llamado "Categoria"
        $marcas = Marca::all(); // Asumiendo que tienes un modelo llamado "Marca"

        // Luego, pasas estas variables a la vista como se muestra a continuación.
        return view('maquina', ['categorias' => $categorias, 'marcas' => $marcas]);
    }

    // Otros métodos del controlador irían aquí...
}