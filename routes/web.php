<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('paginaInicio');
});

Route::get('/layoutPaginas', function () {
    return view('layoutPaginas');
});
