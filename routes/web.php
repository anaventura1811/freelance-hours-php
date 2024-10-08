<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/outra-rota', WelcomeController::class);

Route::get('/loop', function () {
    return view('loop');
});
