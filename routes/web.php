<?php

use Illuminate\Support\Facades\Route;
use App\Models\Categoria;
use App\Models\Marca;
use App\Models\Maquina;
use App\Models\Detalles;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/nosotros', [App\Http\Controllers\NosotrosController::class, 'index'])->name('nosotros');
Route::get('/construccion', [App\Http\Controllers\ConstruccionController::class, 'index'])->name('construccion');
Route::get('/alquiler', [App\Http\Controllers\AlquilerController::class, 'index'])->name('alquiler');
Route::get('/agregados', [App\Http\Controllers\AgregadosController::class, 'index'])->name('agregados');
Route::get('/contacto', [App\Http\Controllers\ContactoController::class, 'index'])->name('contacto');
Route::get('/welcome', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');
Route::get('/categoria', [App\Http\Controllers\CategoriaController::class, 'index'])->name('categoria');
Route::get('/marca', [App\Http\Controllers\MarcaController::class, 'index'])->name('marca');
Route::get('/maquina', [App\Http\Controllers\MaquinaController::class, 'index'])->name('maquina');
Route::get('/agregar_maquinaria', [App\Http\Controllers\AgregarMaquinariaController::class, 'index'])->name('agregar_maquinaria');

Route::get('/filtro', [App\Http\Controllers\FiltroController::class, 'filtro'])->name('filtro');


use Illuminate\Http\Request;
Route::post('/guardar_categoria', function (Request $request) {
    $categoria = new Categoria;
    $categoria->categoria = $request->input('categoria');
    $categoria->save();
    return redirect('/agregar_maquinaria')->with('success', 'Categoría agregada correctamente');
})->name('guardar_categoria');

Route::post('/guardar_marca', function (Request $request) {
    $marca = new Marca;
    $marca->marca = $request->input('marca');
    $marca->save();
    return redirect('/agregar_maquinaria')->with('success', 'Marca agregada correctamente');
})->name('guardar_marca');

Route::post('/guardar_maquina', function (Request $request) {
    $maquina = new Maquina;
    $maquina->maquina = $request->input('maquina');
    $maquina->id_categoria = $request->input('id_categoria');
    $maquina->id_marca = $request->input('id_marca');

    if ($request->hasFile('archivo')) {
        $carpeta_destino = 'maquina_imagenes/';
        $nombre_archivo = $request->file('archivo')->getClientOriginalName();
        $request->file('archivo')->move($carpeta_destino, $nombre_archivo);
        $ruta_imagen = $carpeta_destino . $nombre_archivo;
        $maquina->ruta_imagen = $ruta_imagen;
    }
    $maquina->save();
    return redirect('/agregar_maquinaria')->with('success', 'Máquina agregada correctamente');
})->name('guardar_maquina');

Route::post('/guardar_detalle', function (Request $request) {
    
    $detalles = new Detalles;
    $detalles->detalles_json = json_encode($request->input('detalles_json'));
    $detalles->id_categoria = $request->input('id_categoria');
    $detalles->id_marca = $request->input('id_marca');
    $detalles->id_maquina = $request->input('id_maquina');
    $detalles->modelo = $request->input('modelo');
    $detalles->cip = $request->input('cip');
    $detalles->save();
    return redirect('/agregar_maquinaria')->with('success', 'Detalle agregada correctamente');
})->name('guardar_detalle');