<?php

use App\Http\Controllers\AnimaisController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\Configuration\Group;

Route::get('/', function () {
    return view('inicial');
})->name('index');

Route::get('/animais', [AnimaisController::class, 'index'])->name('animais');

Route::get('/animais/cadastrar', [AnimaisController::class, 'cadastrar'])->name('animais.cadastrar');

Route::post('/animais/cadastrar', [AnimaisController::class, 'gravar'])->name('animais.gravar');

Route::get('/animais/editar/{animal}', [AnimaisController::class, 'editar'])->name('animais.editar');

Route::put('/animais/editar/{animal}', [AnimaisController::class, 'editarGravar'])->name('editar.teste');

Route::get('/animais/apagar/{animal}', [AnimaisController::class, 'apagar'])->name('animais.apagar');

Route::delete('/animais/apagar/{animal}', [AnimaisController::class, 'deletar']);

//usuarios
Route::prefix('users')->middleware('auth')->group(function() {
    Route::get('/', [UsersController::class, 'index'])->name('users');
    Route::get('/cadastrar', [UsersController::class, 'cadastrar'])->name('users.cadastrar');
    Route::get('/cadastrar', [UsersController::class, 'gravar'])->name('users.gravar');
    Route::get('/editar{user}', [UsersController::class, 'editar'])->name('users.editar');
    Route::get('/editar{user}', [UsersController::class, 'editarGravar'])->name('editar.teste');
    Route::get('/apagar{user}', [UsersController::class, 'apagar'])->name('users.apagar');
    Route::get('/apagar{user}', [UsersController::class, 'deletar']);
    
});
Route::get('login', [UsersController::class, 'login'])->name('login');

Route::post('login', [UsersController::class, 'login']);

Route::get('logout', [UsersController::class, 'logout'])->name('logout');