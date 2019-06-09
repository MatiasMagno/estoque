<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categorias' , 'Configuracao\CategoriaController@index');
Route::get('/produtos' , 'Configuracao\ProdutoController@index');
Route::get('/produtos/visualizar','Configuracao\Produtos@show');
Route::get('/usuarios' , 'Seguranca\UsuarioController@index');
