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
Route::get('/menuVer', 'MenuController@index')->name('ver-menu');
Route::get('/menuAgr', 'MenuController@create')->name('agregar-menu');

Route::resource('menu','MenuController');
//Para devolver a la vista con el mensaje del evento
Route::view('delMenu', 'menu.ver');
Route::view('agrMenu', 'menu.agregar');