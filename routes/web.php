<?php

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
//     return view('welcome');
// });

use App\Http\Controllers\TopicController;

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::resource('topic','TopicController');
Route::resource('cate','CategoryController');
Route::resource('album','AlbumController');
Route::resource('playlist','PlaylistController');
Route::resource('adver','AdverController');