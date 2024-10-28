<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Melinda Sulaeman']);
});

Route::get('/blog', function () {
    return view('blog', ['nama' => 'Melinda Sulaeman']);
});

