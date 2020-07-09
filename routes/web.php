<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('nosotros', function () {
    return view('about');
})->name('about');

Route::get('servicios', function () {
    return view('service');
})->name('service');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::post('contact', 'mensajesCtrl@store');