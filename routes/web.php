<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('guest.welcome');
// });

Auth::routes();


Route::middleware('auth')
->prefix('admin')
->name('admin.')
->namespace('Admin')
->group( function(){
    Route::get('/admin', 'HomeController@index')->name('home');
    Route::resource('posts', 'PostController');
});

// questa parte qua mi dice: any api non gestita sopra riuslerà come guest.home, ora questa parte la scarico a Vue, sara lei a gestire le rotte in questa sezione
Route::get('{any?}', function(){
    return view('guest.welcome');
})->where("any", ".*");