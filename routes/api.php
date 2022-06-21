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

// vado a definire la struttura della rotta. Ciò che l'utente deve adndare a inserire dentro axios per restituire l'info in questione
Route::namespace('Api')->group( function(){
    // quando viene attivata questa rotta (localHost/posts) allora viene attivato il controller index() (http/controllers/api/PostController). La f index() salva dentro una variabile le info.
    Route::get('/posts', 'PostController@index');
    Route::get('/posts{id}', 'PostController@show');
});