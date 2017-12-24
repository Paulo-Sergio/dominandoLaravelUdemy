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
Route::get('test', function(){
    $user = new \App\User;
    $user->name = 'Paulo';
    $user->email = 'paulo@gmail.com';
    $user->password = bcrypt(123456);
    $user->role = 'admin';
    $user->save();
    
    return $user;
});


Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home']);

Route::get('saudacao/{nome}', ['as' => 'saudacao', 'uses' => 'PagesController@saudacao']);


Route::get('messages', ['as' => 'messages.index', 'uses' => 'MessagesController@index']);
Route::get('messages/create', ['as' => 'messages.create', 'uses' => 'MessagesController@create']);
Route::post('messages/store', ['as' => 'messages.store', 'uses' => 'MessagesController@store']);
Route::get('messages/{id}', ['as' => 'messages.show', 'uses' => 'MessagesController@show']);
Route::get('messages/{id}/edit', ['as' => 'messages.edit', 'uses' => 'MessagesController@edit']);
Route::put('messages/{id}', ['as' => 'messages.update', 'uses' => 'MessagesController@update']);
Route::delete('messages/{id}', ['as' => 'messages.destroy', 'uses' => 'MessagesController@destroy']);

Route::get('users', ['as' => 'users.index', 'uses' => 'UsersController@index']);
Route::get('users/create', ['as' => 'users.create', 'uses' => 'UsersController@create']);
Route::post('users/store', ['as' => 'users.store', 'uses' => 'UsersController@store']);
Route::get('users/{id}', ['as' => 'users.show', 'uses' => 'UsersController@show']);
Route::get('users/{id}/edit', ['as' => 'users.edit', 'uses' => 'UsersController@edit']);
Route::put('users/{id}', ['as' => 'users.update', 'uses' => 'UsersController@update']);
Route::delete('users/{id}', ['as' => 'users.destroy', 'uses' => 'UsersController@destroy']);

Route::get('login', 'Auth\AuthController@showLoginForm');
Route::post('login', 'Auth\AuthController@login');
Route::get('logout', 'Auth\AuthController@logout');