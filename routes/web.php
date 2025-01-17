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
    return view('welcome');
});

// Route::get('/', function () {
//     $empres = Empresa::all();
//     return view('welcome', compact('empres'));
// });


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/empresas', 'EmpresaController')->middleware('auth');

Route::resource('/fichas', 'FichaController')->middleware('auth');

Route::get('/fichas/{id}', 'FichaController@fichas');

