<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Inicio;
use App\Http\Controllers\acercaDe;
use App\Http\Controllers\Recetas;
use App\Http\Controllers\Yuyos;
use App\Http\Controllers\Contacto;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('/',  function () {
    return view('inicio');
}); */

//ruta inicio
Route::get('/', [Inicio::class, 'inicio'])->name('inicio');
//ruta acerca de
Route::get('/acerca-de', [acercaDe::class, 'acercaDe'])->name('acerca-de');
//ruta recetas
Route::get('/recetas', [Recetas::class, 'recetas'])->name('recetas');
//ruta recetas
Route::get('/yuyos', [Yuyos::class, 'yuyos'])->name('yuyos');
//ruta contacto
Route::get('/contacto', [Contacto::class, 'contacto'])->name('contacto');