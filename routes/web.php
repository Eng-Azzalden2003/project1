<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('home', function() {
    return 'Home , Home' ;
});

Route::get('/about', function () {
    return view('schol'); //schol.blade.php
});


