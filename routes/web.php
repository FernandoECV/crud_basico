<?php

use App\Http\Controllers\UsersController;
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
    return view('welcome');
});

Route::get('/usuarios/novo', 'UsersController@create');
Route::post('/usuarios/novo', [UsersController::class, 'store'])->name('cadastrar_usuario');
Route::get('/usuarios/visualizar/{id}', 'UsersController@show');
Route::get('/usuarios/editar/{id}', 'UsersController@edit');
Route::post('/usuarios/editar/{id}', 'UsersController@update')->name('alterar_usuario');
Route::get('/usuarios/excluir/{id}', 'UsersController@delete');
Route::post('/usuarios/excluir/{id}', 'UsersController@destroy')->name('deletar_usuario');