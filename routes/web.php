<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::controller(HomeController::class)->group(function () {
    Route::get(
        '/home', // uri
        'index' // accion o metodo del controlador
    )->name('home.index'); // nombre de la ruta

    Route::get(
        '/', // uri
        'index' // accion o metodo del controlador
    )->name('index'); // nombre de la ruta
});

// esto se podia realizar sin agrupar
// Route::get('/home', [HomeController::class, 'index'])->name('home.index');
// Route::get('/', [HomeController::class, 'index'])->name('index');

Route::controller(ClienteController::class)->group(function () {
    Route::get('/cliente', 'index')->name('cliente.index');
    Route::get('/cliente/create', 'create')->name('cliente.create');
    Route::post('/cliente', 'store')->name('cliente.store');
    Route::get('/cliente/edit/{id}', 'edit')->name('cliente.edit');
    Route::get('/cliente/{id}', 'show')->name('cliente.show');
    Route::put('/cliente/{cliente}', 'update')->name('cliente.update');
    Route::delete('/cliente/{cliente}', 'destroy')->name('cliente.destroy');
});

// esto es un gestor de rutas de grupo de tipo controlador de recursos
// Route::resource('cliente', ClienteController::class);
