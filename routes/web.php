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

Route::get('/',['as'=>'site.home','uses'=>'HomeController@index']);

Route::get('/login',['as'=>'site.login','uses'=>'LoginController@index']);
Route::post('/login/entrar',['as'=>'site.login.entrar','uses'=>'LoginController@entrar']);
Route::get('/login/sair',['as'=>'site.login.sair','uses'=>'LoginController@sair']);


Route::group(['middleware'=>'auth'], function(){

	Route::get('/admin/clientes',['as'=>'admin.clientes', 'uses'=>'ClienteController@index']);
	Route::get('/admin/clientes/adicionar',['as'=>'admin.clientes.adicionar','uses'=>'ClienteController@adicionar']);
	Route::post('/admin/clientes/salvar',['as'=>'admin.clientes.salvar','uses'=>'ClienteController@salvar']);
	Route::get('/admin/clientes/editar/{id}',['as'=>'admin.clientes.editar','uses'=>'ClienteController@editar']);
	Route::put('/admin/clientes/atualizar/{id}',['as'=>'admin.clientes.atualizar','uses'=>'ClienteController@atualizar']);
	Route::get('/admin/clientes/deletar/{id}',['as'=>'admin.clientes.deletar','uses'=>'ClienteController@deletar']);


});


