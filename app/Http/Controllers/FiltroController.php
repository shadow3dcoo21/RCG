<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Categoria;
use App\Models\Marca;
use App\Models\Maquina;
use App\Models\Detalles;
use Illuminate\Support\HtmlString;
class FiltroController extends Controller
{
    public function filtro(Request $request)
    {
    $categorias = Categoria::all();
    $marcas = Marca::all();

    $selectedCategoria = $request->input('categoria');
    $selectedMarca = $request->input('marca');

    if ($selectedCategoria && $selectedMarca) {
        $detalles = Detalles::where('id_categoria', $selectedCategoria)
            ->where('id_marca', $selectedMarca)
            ->get();
    } elseif ($selectedCategoria) {
        $detalles = Detalles::where('id_categoria', $selectedCategoria)->get();
    } elseif ($selectedMarca) {
        $detalles = Detalles::where('id_marca', $selectedMarca)->get();
    } else {
        $detalles = Detalles::all();
    }

    return view('filtro', compact('categorias', 'marcas', 'detalles'));
}
}
