<?php

use App\Http\Controllers\API\APIAlbumController;
use App\Http\Controllers\API\APIBaihatController;
use App\Http\Controllers\API\APIChudeController;
use App\Http\Controllers\API\APIPlaylistController;
use App\Http\Controllers\API\APIQuangcaoController;
use App\Http\Controllers\API\APITheloaiController;
use Illuminate\Http\Request;

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


//api get data for home
Route::get('quangcao', [APIQuangcaoController::class, 'index']);
Route::get('playlist', [APIPlaylistController::class, 'index']);
Route::get('chude', [APIChudeController::class, 'index']);
Route::get('theloai', [APITheloaiController::class, 'index']);
Route::get('album', [APIAlbumController::class, 'index']);

//api get all data
Route::get('alldata_playlist', [APIPlaylistController::class, 'show']);
Route::get('alldata_chude', [APIChudeController::class, 'show']);
Route::get('alldata_album', [APIAlbumController::class, 'show']);

//api get baihat theo id 
Route::get('getquangcao/{id}', [APIQuangcaoController::class, 'getquangcao']);
Route::get('getplaylist/{id}', [APIPlaylistController::class, 'getplaylist']);
Route::get('gettheloai/{id}', [APITheloaiController::class, 'gettheloai']);
Route::get('getchude/{id}', [APIChudeController::class, 'getchude']);
Route::get('getalbum/{id}', [APIAlbumController::class, 'getalbum']);

//search baihat
Route::get('search/{name}', [APIBaihatController::class, 'search']);

//api show nhac
Route::get('baihat', [APIBaihatController::class, 'getsong']);
