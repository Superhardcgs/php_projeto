<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('site/home');
});

Route::get('/contato', function(){
    return view('site/contato');
});

Route::get('/sobre', function(){
    return view('site/sobre');
});

Route::get('/servicos', function(){
    return view('site/servicos');
});

Route::get('/streaming', function(){
    return view('site/streaming');
});

Route::get('/games', function(){
    return view('site/games');
});

Route::get('/hardware', function(){
    return view('site/hardware');
});

Route::get('/loginAdmin', function(){
    return view('site/loginAdmin');
});
