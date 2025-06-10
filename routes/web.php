<?php

use App\Http\Controllers\AnimalController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/index', function () {
//     return view('animales/index');
// });

// Route::get('/create', function () {
//     return view('animales/create');
// });

Route::resource('animales', AnimalController::class);

Route::get('/edit', function () {
    return view('animales.edit');
});

Route::get('/show', function () {
    return view('animales.show');
});