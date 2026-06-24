<?php
// Ele tem como função definir as rotas da aplicação.
// Cada rota associa uma URL a uma página (View) ou a um Controller.
// Por meio dessas rotas, o sistema pode visualizar páginas,
// buscar dados, enviar informações ao banco e executar funcionalidades.

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\EventoController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::view('/sobre', 'sobre')->name('sobre');

Route::get('/cursos', [CursoController::class, 'index'])
    ->name('cursos');

Route::get('/eventos', [EventoController::class, 'index'])
    ->name('eventos');

    Route::fallback(function () {
    return response()->view('404', [], 404);
});

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});

require __DIR__.'/auth.php';