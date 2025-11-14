<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home_screen');
});

Route::get('/new-game', function () {
    return view('new_game'); 
})->name('Game');