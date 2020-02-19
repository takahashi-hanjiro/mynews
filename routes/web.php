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




/*
【応用】 routes/web.php を編集して、
admin/profile/create に postメソッドでアクセスしたら 
ProfileController の create Action に割り当てるように設定してください。
*/
/*
【応用】 routes/web.php を編集して、 
admin/profile/edit に postメソッドでアクセスしたら 
ProfileController の update Action に割り当てるように設定してください。
*/


Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'Admin\NewsController@add');
    Route::post('news/create', 'Admin\NewsController@create');
    Route::get('profile/create', 'Admin\ProfileController@add')->middleware('auth');
    Route::get('profile/edit', 'Admin\ProfileController@edit')->middleware('auth');
    Route::post('profile/create', 'Admin\ProfileController@create')->middleware('auth');
    Route::post('profile/edit', 'Admin\ProfileController@update');
});

Route::get('XXX', 'Admin\AAAController@bbb');


Route::get('admin/profile/create', 'Admin\ProfileController@add');

Route::get('admin/profile/edit', 'Admin\ProfileController@edit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

