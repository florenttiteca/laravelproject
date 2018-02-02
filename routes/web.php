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

// Route::get('/', 'PostController@index');
// Route::get('/', array('uses' => 'PostController@index', 'as' => 'posts.index'));
// Route::get('/blog/{slug}', array('uses' => 'PostController@view', 'as' => 'post.view'));

// Route::get('/post/edit/{id}', array('uses' => 'PostController@edit', 'as' => 'post.edit'));
// Route::post('/post/edit/{id}', array('uses' => 'PostController@update', 'as' => 'post.update', 'before' =>'csrf'));

Route::resource('post', 'PostController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
