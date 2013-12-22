<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('uses' => 'HomeController@showWelcome', 'as' => 'home'));

Route::get('/blog', array('uses' => 'BlogController@articles', 'as' => 'articles'));

Route::get('/makale-ekle', array('uses' => 'BlogController@newArticle', 'as' => 'newArticle', 'before' => 'auth'));

Route::get('/blog/{id}', array('uses' => 'BlogController@detail', 'as' => 'detail'));

Route::post('/makale/ekle', array('uses' => 'BlogController@insertArticle', 'as' => 'insertArticle', 'before' => 'auth|csrf'));

Route::get('/login', array('uses' => 'UserController@login', 'as' => 'login'));

Route::post('/uye-ol', array('uses' => 'UserController@signUp', 'as' => 'signUp'));

Route::post('/uye-girisi', array('uses' => 'UserController@signIn', 'as' => 'signIn'));

Route::get('/cikis', array('uses' => 'UserController@logout', 'as' => 'logout'));