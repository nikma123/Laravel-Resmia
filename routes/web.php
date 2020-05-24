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
    return View('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Para pagar el index predeterminado 
Route::get('/menuVer', 'MenuController@index')->name('ver');

Route::resource('/menu','MenuController');

//Route::get('/ver', 'MenuController@index');

//Route::get('/agregar', 'MenuController@create');