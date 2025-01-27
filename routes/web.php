<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
   
})->name('welcome');
Route::get('QuienesSomos', function () {
    return view('QuienesSomos');
   
});
Route::get('/pagNoticias', function () {
    return view('pagNoticias');
})->name('pagNoticias.show');
