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

Route::get('/','FrontEndController@index' );
Route::get('/post/{slug}','FrontEndController@singlePage' )->name('single.post');
Route::get('/category/{id}' , 'FrontEndController@singleCategory');
Route::get('/tag/{id}' , 'FrontEndController@singleTag');

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');



Route::prefix('/admin')->middleware('auth')->group(function(){

    Route::resource('category' , 'CategoriesController');
    Route::get('/post/trash' ,'PostsController@trash')->name('posts.trash');
    Route::get('/post/trash/{id}/delete' ,'PostsController@Forcedelete');
    Route::get('/post/trash/{id}/restore' ,'PostsController@restore');
    Route::post('/post/upload_image', 'PostsController@uploadImage');
    Route::resource('post' , 'PostsController');
    Route::resource('tag','TagsController');

    Route::get('/user/{id}/makeadmin' , 'UserController@makeadmin');
    Route::get('/user/{id}/deleteadmin' , 'UserController@deleteadmin');
    Route::resource('user' , 'UserController');

    Route::resource('profile','ProfileController');

    Route::get('/setting' , 'SettingController@index');
    Route::post('/setting/update' , 'SettingController@update');




});

