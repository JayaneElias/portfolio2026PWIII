<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClimaController;
use App\Models\Clima;

Route::get('/', function () {
    return view('home'); 
});


Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [AuthController::class, 'login'])
    ->name('login.store');

Route::get('/cadastro', function () {
    return view('auth.cadastro');
})->name('register');

Route::post('/cadastro', [AuthController::class, 'register'])
    ->name('register.store');


    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



Route::get('/historico', function () {

    $climas = Clima::orderBy('data_registro', 'desc')->get();
    return view('historico', compact('climas'));

})->name('historico');


Route::post('/reportar-clima', [ClimaController::class, 'store'])
    ->name('clima.store');

Route::get('/historico', [ClimaController::class, 'historico'])->name('historico');

Route::fallback(function () {
    return response("
        <h1>Rota Fallback Ativa</h1>
        <p>Página não existe no Zênite...</p>
        <a href='/'>Ir para Home</a>
    ", 404);
});

