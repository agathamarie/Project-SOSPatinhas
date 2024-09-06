<?php

use Illuminate\Support\Facades\Route;

Route::get('/paginaInicio', function () {
    return view('paginaInicio');
});

Route::get('/layoutPaginas', function () {
    return view('layoutPaginas');
});

Route::get('/adocao', function () {
    return view('adocao');
});

Route::get('/arrecadacao', function () {
    return view('arrecadacao');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/comoAjudar', function () {
    return view('comoAjudar');
});

Route::get('/detalhesEvento', function () {
    return view('detalhesEvento');
});

Route::get('/eventos', function () {
    return view('eventos');
});

Route::get('/formulario', function () {
    return view('formulario');
});

Route::get('/informacaoAnimal', function () {
    return view('informacaoAnimal');
});

Route::get('/quemSomos', function () {
    return view('quemSomos');
});

Route::get('/login', function () {
    return view('login');
});