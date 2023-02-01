<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\VarController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/tags', 'App\Http\Controllers\API\ApiController@getTags');
Route::get('/tasks', 'App\Http\Controllers\API\ApiController@getTasks');
Route::post('/tasks', 'App\Http\Controllers\API\ApiController@postTask');
Route::put('/tasks/{id}', 'App\Http\Controllers\API\ApiController@updateTask')->where('id', '^[0-9]+');
Route::delete('/tasks/{id}', 'App\Http\Controllers\API\ApiController@destroyTask')->where('id', '^[0-9]+');