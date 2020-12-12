<?php


use App\Role;
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
Route::get('R', function () {
    return Role::with('user')->get();
});

Route::group(['prefix' => 'auth'], function () {

    Route::post('login','AuthController@login');

});

Route::resource('Administracion/usuarios','AdministracionUserController');

Route::get('Administracion',[ 'as'=>'administracion', 'uses'=>'PaginaController@administracion'])->middleware('user');

Route::get('/','Auth\LoginController@showLoginForm');

Route::get('logout','Auth\LoginController@Logout');

Route::get('Administracion/nivel','CursoController@nivel');
Route::get('Administracion/curso','CursoController@index');
Route::post('Administracion/student/{id}/edit','CursoController@edit');
Route::post('Administracion/studentcurso/{id}/edit','CursoController@editc');
Route::post('Administracion/studentnotas/{id}/edit','CursoController@editn');
Route::post('Administracion/studentnotast/{id}/edit','CursoController@editnt');


Route::resource('Administracion/cursocategoria','CursoCategoriaController');
Route::post('Administracion/cursocategoria/{id}/edit', 'CursoCategoriaController@edit');
