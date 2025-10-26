<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobre', function () {
    return view('paginas.sobre');
});

Route::get('/dados', function () {
    return view('paginas.dados');
});

Route::get('/agencias', function () {
    return view('paginas.agencias');
});

Route::get('/eventos', function () {
    return view('paginas.eventos');
});

Route::get('/desporto', function () {
    return view('paginas.desporto');
});

Route::get('/catalogo', function () {
    return view('paginas.catalogo');
});

Route::get('/formularios', function () {
    return view('paginas.formularios');
});

Route::get('/colaboradores/novos', function () {
    return view('paginas.novos');
});

Route::get('/colaboradores/equipa', function () {
    return view('paginas.equipa');
});

Route::get('/campanhas', function () {
    return view('paginas.campanhas');
});

Route::get('/parcerias', function () {
    return view('paginas.parcerias');
});

