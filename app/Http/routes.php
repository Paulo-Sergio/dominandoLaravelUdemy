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

Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home']);

Route::get('contato', ['as' => 'contato', 'uses' => 'PagesController@contato']);
Route::post('contato', ['as' => 'contato', 'uses' => 'PagesController@mensagens']);

Route::get('saudacao/{nome}', ['as' => 'saudacao', 'uses' => 'PagesController@saudacao']);


Route::get('mensagens', ['as' => 'messages.index', 'uses' => 'MessagesController@index']);
Route::get('mensagens/create', ['as' => 'messages.create', 'uses' => 'MessagesController@create']);
Route::post('mensagens/store', ['as' => 'messages.store', 'uses' => 'MessagesController@store']);
Route::get('mensagens/{id}', ['as' => 'messages.show', 'uses' => 'MessagesController@show']);
Route::get('mensagens/{id}/edit', ['as' => 'messages.edit', 'uses' => 'MessagesController@edit']);
Route::put('mensagens/{id}', ['as' => 'messages.update', 'uses' => 'MessagesController@update']);
Route::delete('mensagens/{id}', ['as' => 'messages.destroy', 'uses' => 'MessagesController@destroy']);