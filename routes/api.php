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

Route::get('/getData','Pegawai@getData');
Route::post('/pushData','Pegawai@store');
Route::post('/setData','Pegawai@update');
Route::get('/delete/{id}','Pegawai@hapus');
Route::get('/getDetail/{id}','Pegawai@getDetail');