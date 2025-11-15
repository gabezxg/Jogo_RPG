<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home_screen');
});

Route::get('/combate', function () {
    return view('combat'); 
})->name('Combate');

Route::get('/creditos', function () {
    return view('credits'); 
})->name('Creditos');