<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoticiaController;
use App\Http\Livewire\GerenciarEventos;
use App\Http\Livewire\EventosForm;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Rota principal, detalhe de notícias e rotas do dashboard.
| Mantive as rotas do dashboard sem auth para facilitar testes.
| Ajusta middleware('auth') quando estiveres pronto.
|
*/

// routes/web.php

// routes/web.php






Route::middleware([])->group(function () {
    Route::get('/dashboard/eventos', GerenciarEventos::class)->name('dashboard.eventos');
});

Route::get('/eventos', EventosForm::class)->name('eventos-form');

// Home (nomeada como 'home' para compatibilidade com redirect()->route('home'))
Route::get('/', [HomeController::class, 'index'])->name('home');

// Detalhe da notícia por slug (nomeada 'noticias.show')
Route::get('/noticias/{slug}', [NoticiaController::class, 'show'])->name('noticias.show');

// Rotas do dashboard (sem middleware auth para testes; em produção coloca auth)
Route::prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    // Páginas para inserir / gerir (views com componentes Livewire)
    Route::get('/users/create', function () {
        return view('dashboard.users.create');
    })->name('dashboard.users.create');

    Route::get('/posts/create', function () {
        return view('dashboard.posts.create');
    })->name('dashboard.posts.create');

    // Podes adicionar aqui listagens/edição de usuários, posts, etc.
});

// Páginas estáticas
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