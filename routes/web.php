<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

/**
 * Route::get       |   Consultar
 * Route::post      |   Guardar
 * Route::delete    |   Eliminar
 * Route::put       |   Actualizar
 */

Route::get('/', function () {
    return view('welcome');
});

Route::get('blog', function () {
    return 'Listado de publicaciones';
});

Route::get('blog/{slug}', function ($slug) {
    return $slug;
});

Route::get('buscar', function (Request $request) {
    return $request->all();
});
