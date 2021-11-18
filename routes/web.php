<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


//auth route for both

Route::group(['middleware' =>['auth']], function () {
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
    /* Route::get('/paginas', 'App\Http\Controllers\DashboardController@paginas')->name('paginas');
    Route::get('/paginas/crear', 'App\Http\Controllers\DashboardController@crear')->name('crear pagina nueva'); */

    Route::get('/agregar-post', [DashboardController::class,'agregarPost']) ->name('agregar.post');
    Route::post('/agregar-post', [DashboardController::class,'guardarPost']) ->name('guardar.post');
    Route::get('/paginas', [DashboardController::class,'paginasList']) ->name('paginas');

    Route::get('/editar-pagina/{id}', [DashboardController::class,'paginasEdit']) ->name('editar.post');

    Route::post('/actualizar-pagina', [DashboardController::class,'paginasUpdate']) ->name('actualizar.post');
    
    Route::get('/eliminar-pagina/{id}', [DashboardController::class,'paginasDelete']) ->name('eliminar.post');
});

require __DIR__.'/auth.php';




Route::get('/', 'App\Http\Controllers\inicio@inicio');

Route::get('/usuarios', 'App\Http\Controllers\UserController@index');

Route::get('/usuarios/{id}', 'App\Http\Controllers\UserController@show')->where('id','[0-9]+');

Route::get('/usuarios/nuevo', 'App\Http\Controllers\UserController@create');

Route::get('/saludo/{name}/{nickname?}', 'WelcomeUserController@index');

Route::get('locales','App\Http\Controllers\LocalesController@locales');

Route::get('locales/bacon-bros','App\Http\Controllers\LocalesController@bacon_bros');

Route::get('locales/didactoys','App\Http\Controllers\LocalesController@didactoys');

Route::get('locales/mauxi-creaciones','App\Http\Controllers\LocalesController@mauxi_creaciones');

Route::get('acerca-de','App\Http\Controllers\AboutController@acerca_de');
//contact link and send messages
Route::get('contacto','App\Http\Controllers\ContactController@contacto');
// paginas Routes
/* Route::get('paginas','App\Http\Controllers\PaginasController@paginas'); */