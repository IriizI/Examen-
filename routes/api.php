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

/* Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
}); */

//Routes category
Route::apiResource('categories','\App\Http\Controllers\CategoryController');

//post
Route::apiResource('posts','\App\Http\Controllers\ControllerPost');
//Route::get('post/{id}','\App\Http\Controllers\PostController@individual');
//Route::get('post','\App\Http\Controllers\PostController@index');
//Route::get('pdededeost','\App\Http\Controllers\PostController@index');
Route::get('postCategory/{id}','\App\Http\Controllers\PostController@categoryPost');
Route::get('postCategory','\App\Http\Controllers\PostController@categoryPosthome');
 