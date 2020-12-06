<?php


use Illuminate\Support\Facades\Auth;
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

Route::get('/',[ 'as'=>'home', 'uses'=>'PaginaController@home']);

Route::resource('Administracion/usuarios','AdministracionUserController');

Route::get('Administracion',[ 'as'=>'administracion', 'uses'=>'PaginaController@administracion'])->middleware('user');

Route::get('login','Auth\LoginController@showLoginForm');

Route::post('login','Auth\LoginController@Login');

Route::get('logout','Auth\LoginController@Logout');


Route::get('Administracion/productos',[ 'as'=>'administracion.productos', 'uses'=>'ProductosController@index']);
