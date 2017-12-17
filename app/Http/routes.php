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
    $user->save();
    
    return $user;
});


Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home']);

Route::get('saudacao/{nome}', ['as' => 'saudacao', 'uses' => 'PagesController@saudacao']);


Route::get('mensagens', ['as' => 'mensagens.index', 'uses' => 'MessagesController@index']);
Route::get('mensagens/create', ['as' => 'mensagens.create', 'uses' => 'MessagesController@create']);
Route::post('mensagens/store', ['as' => 'mensagens.store', 'uses' => 'MessagesController@store']);
Route::get('mensagens/{id}', ['as' => 'mensagens.show', 'uses' => 'MessagesController@show']);
Route::get('mensagens/{id}/edit', ['as' => 'mensagens.edit', 'uses' => 'MessagesController@edit']);
Route::put('mensagens/{id}', ['as' => 'mensagens.update', 'uses' => 'MessagesController@update']);
Route::delete('mensagens/{id}', ['as' => 'mensagens.destroy', 'uses' => 'MessagesController@destroy']);

Route::get('login', 'Auth\AuthController@showLoginForm');
Route::post('login', 'Auth\AuthController@login');
Route::get('logout', 'Auth\AuthController@logout');