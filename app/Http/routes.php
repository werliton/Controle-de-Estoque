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


Route::get('home', 'HomeController@index');
//Rotas apenas para teste

Route::get('home-atendente', 'HomeController@atendente');
Route::get('home-caixa', 'HomeController@caixa');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('/produto', 'ProdutoController@lista');
Route::get('/produto/mostra/{id}', 'ProdutoController@mostra');
//->where('id','[0-9]+');
Route::get('/produto/novo', 'ProdutoController@novo');
/* VENDAS */
Route::get('/vendas/novo', 'VendaController@novo');
Route::get('/vendas/realizadas', 'VendaController@realizadas');
Route::post('/vendas/salvar', 'VendaController@salvar');
/* LOGIN */

Route::get('/', 'LoginController@index');
Route::post('/login', 'LoginController@login');

/* FUNCIONARIO*/
Route::get('/funcionario/novo', 'FuncionarioController@novo');
/* ITEM */
Route::get('/item/novo', 'ItemController@novo');
/* ESTOQUE */
Route::get('/estoque/transacoes', 'EstoqueController@transacoes');
/* CAIXA */
Route::get('/vendas-atendente/novo', 'VendaController@novo');
Route::get('/vendas-atendente/realizadas', 'VendaController@realizadas');
Route::post('/vendas-atendente/salvar', 'VendaController@salvar');
/* ATENDENTE */

Route::get('/produto/novo_atendente', 'ProdutoController@novo_atendente');
Route::get('/item/novo_atendente', 'ItemController@novo_atendente');
