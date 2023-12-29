<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Marca;
use App\Models\Maquina;
use App\Models\Detalles;
use Illuminate\Support\HtmlString;
class AgregarMaquinariaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function formatDetails($detailsJson)
    {
        $details = str_replace(['\t', '\r\n', '\r', '\n', '\u00f3'], ['', '<br>', '', '<br>', 'ó'], $detailsJson);
        $decodedDetails = html_entity_decode($details);
    
        return new HtmlString($decodedDetails);
    }
    public function index()
    {
        
        $categorias = Categoria::all(); // Asumiendo que tienes un modelo llamado "Categoria"
        $marcas = Marca::all(); // Asumiendo que tienes un modelo llamado "Marca"
        $maquinas = Maquina::all();
        $detalles = Detalles::all();
        // Luego, pasas estas variables a la vista como se muestra a continuación.
        return view('agregar_maquinaria', ['categorias' => $categorias, 'marcas' => $marcas,'maquinas' => $maquinas,'detalles' => $detalles,]);
    }
    

}
