<?php
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\FirePHPHandler;

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

Route::get('/filmes', 'filmeController@listarFilmes');
    

Route::get('/filmes/{id}','filmeController@detalhesFilmes');

Route::get('/cadastrarFilme', 'filmeController@cadastrarFilme');

Route::get('/deletarFilme/{id}', 'filmeController@deletarFilme');

Route::post('/cadastrarFilme', 'filmeController@cadastrarFilme');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin',function () {
    return view('admin');
})->middleware('checkAdmin');
