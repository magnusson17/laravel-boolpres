<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// localhost:8080/api/test
Route::get('/test', function(){
    $name = ['Aldo', 'Giovanni', 'Giacomo'];
    $frutta = ['pera', 'mela', 'kiwi'];

    // json trasforma l'array in sintassi json
    // avrò un oggettone con 2 array
    return response()->json( compact('name', 'frutta') );
});


// Route::get('/posts', Api\PostController@index);

Route::namespace('Api')->group( function(){
    Route::get('/posts', 'PostController@index');
});