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

Route::get('/', 'SenaiLabController@home');

Route::get('/downloads', 'SenaiLabController@downloads');

Route::get('/impressora3d', 'SenaiLabController@impressora');

Route::get('/corte-a-laser', 'SenaiLabController@laser');

Route::get('/noticias', 'SenaiLabController@noticias');

Route::get('/ver-noticia', 'SenaiLabController@noticiasAbertas');

Route::get('/contato', 'SenaiLabController@contato');

Route::get('/downloads', 'SenaiLabController@downloads');

Route::get('/sobre', 'SenaiLabController@sobre');

Route::get('/projetos', 'SenaiLabController@projetos');

