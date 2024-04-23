<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/acercade', function () {
    return view('acercade');
});

?>
