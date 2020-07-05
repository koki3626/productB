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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function() {
    Route::get('article/create', 'Admin\ArticleController@add');
    Route::get('mypage/create', 'Admin\MypageController@add');
    Route::get('mypage/edit', 'Admin\MypageController@edit');
});
