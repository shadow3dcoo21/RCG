<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detalles;
class DetallesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function mostrarDetalles() {
        $detalles = Detalles::all();
        return view('agregar_maquinaria', ['detalles' => $detalles]);
    }
}
