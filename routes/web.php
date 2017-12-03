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

Route::get('/test',function(){
   return view('layouts.app2');
});

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');



Route::prefix('/admin')->middleware('auth')->group(function(){

    Route::resource('category' , 'CategoriesController');
    Route::get('/post/trash' ,'PostsController@trash')->name('posts.trash');
    Route::get('/post/trash/{id}/delete' ,'PostsController@Forcedelete');
    Route::get('/post/trash/{id}/restore' ,'PostsController@restore');
    Route::resource('post' , 'PostsController');
    Route::resource('tag','TagsController');


});

