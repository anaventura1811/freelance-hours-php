<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'projects.index')->name('projects.index');

Route::view('/project/{project}', 'projects.show')->name('projects.show');

Route::get('/outra-rota', WelcomeController::class);

Route::get('/loop', function () {
    return view('loop');
});
