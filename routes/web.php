<?php

use Illuminate\Support\Facades\Route;

Route::get('/cidades', 'CidadeController@index') -> name('cidades.index');
Route::get('/cidades/{nome}', 'CidadeController@show') -> name('cidades.show');
