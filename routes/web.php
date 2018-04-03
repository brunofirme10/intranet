<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Rotas de pessoa
Route::group(['prefix'=>'pessoa'], function(){
    Route::get('/', 'Pessoa\PessoaController@index')->name('pessoa')->middleware('auth');
    Route::get('/cadastro', 'Pessoa\PessoaController@cadastrarForm')->name('cadastro')->middleware('auth');
    Route::post('/salvar', 'Pessoa\PessoaController@salvar')->name('salvar')->middleware('auth');
    Route::get('/visualizar/{id}', 'Pessoa\PessoaController@visualizar')->name('visualizar')->middleware('auth');
    Route::put('/editar/{id}', 'Pessoa\PessoaController@salvar')->name('editar')->middleware('auth');
});