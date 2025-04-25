<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AgendaController;


Route::get('/', [AgendaController::class, 'index'] );
Route::get('/events/create', [AgendaController::class, 'create'] );
Route::get('/events/{id}', [AgendaController::class, 'Show'] );
Route::post('/events', [AgendaController::class, 'store'] );

Route::get('/contact', function () {
    return view('contact');
});

