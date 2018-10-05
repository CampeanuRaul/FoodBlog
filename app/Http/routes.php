<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Pages routes

Route::get('/', ['uses' => 'PagesController@home', 'as' => 'home']);
Route::get('blog', 'PagesController@blog');
Route::get('blog/{id}', ['uses' => 'PagesController@getSingle', 'as' => 'single'] );
Route::get('about', 'PagesController@about');
Route::post('about', ['uses' => 'PagesController@postAbout', 'as' => 'post.about']);
Route::post('newsletter', ['uses' => 'PagesController@postNewsletter', 'as' => 'post.news']);

// Posts routes

Route::resource('posts', 'PostController');

// Categories routes

Route::get('categories/{id}', ['uses' => 'CategoryController@show', 'as' => 'category.show']);
Route::get('categories', ['uses' => 'CategoryController@getAll', 'as' => 'category.all']);

// Authentication routes

Route::auth();

// Comments routes

Route::post('comments/{post_id}', ['uses' => 'CommentsController@store', 'as' => 'comments.store']);
Route::get('comments', ['uses' => 'CommentsController@index', 'as' => 'comments.index']);
Route::get('comments/{id}/edit', ['uses' => 'CommentsController@edit', 'as' => 'comments.edit']);
Route::get('comments/{id}', ['uses' => 'CommentsController@delete', 'as' => 'comments.delete']);
Route::put('comments/{id}', ['uses' => 'CommentsController@update', 'as' => 'comments.update']);
Route::delete('comments/{id}', ['uses' => 'CommentsController@destroy', 'as' => 'comments.destroy']);


// Users routes

Route::resource('users', 'UserController', ['except' => 'show']); 
Route::get('users/{id}', ['uses' => 'UserController@del', 'as' => 'users.del']);
Route::put('users', ['uses' => 'UserController@postPassword', 'as' => 'users.password']);


