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
    Route::get('news/create', 'Admin\NewsController@add')
    ->middleware('auth');
});

/*
【応用】11章で /admin/profile/create にアクセスしたら 
ProfileController の add Action に割り当てるように設定しました。 
ログインしていない状態で /admin/profile/create にアクセスした場合に
ログイン画面にリダイレクトされるように設定しましょう。
*/
/*
用】同様に 11章で /admin/profile/edit にアクセスしたら 
ProfileController の edit Action に割り当てるように設定しました。 
ログインしていない状態で /admin/profile/edit にアクセスした場合にログイン画面に
リダイレクトされるように設定しましょう。
*/

Route::group(['prefix' => 'admin'], function() {
    Route::get('profile/create', 'Admin\ProfileController@add')->middleware('auth');
    Route::get('profile/edut', 'Admin\ProfileController@edit')->middleware('auth');


Route::get('XXX', 'Admin\AAAController@bbb');


Route::get('admin/profile/create', 'Admin\ProfileController@add');

Route::get('admin/profile/edit', 'Admin\ProfileController@edit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
