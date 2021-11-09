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

Route::get('/servico1', function(){
    return view('site/servico1');
});

Route::get('/servico2', function(){
    return view('site/servico2');
});

Route::get('/servico3', function(){
    return view('site/servico3');
});

Route::get('/loginAdmin', function(){
    return view('site/loginAdmin');
});
