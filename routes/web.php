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

Route::get('/login', function () {
    return view('welcome');
});

Route::get('/about', ['as' => 'about', 'uses' => 'PagesController@about' ]);
Route::get('/support', ['as' => 'support', 'uses' => 'PagesController@support' ]);
Route::get('/privacy', ['as' => 'privacy', 'uses' => 'PagesController@privacy' ]);
Route::get('/careers', ['as' => 'careers', 'uses' => 'PagesController@careers' ]);
Route::get('/contact', ['as' => 'contact', 'uses' => 'PagesController@contact' ]);
Route::get('/contact', ['as' => 'contact', 'uses' => 'MapController@index']);
Route::get('/', ['as' => 'login', 'uses' => 'AuthController@login' ]);
Route::post('/handleLogin', ['as' => 'handleLogin', 'uses' => 'AuthController@handleLogin' ]);
Route::get('/home', ['middleware' => 'auth', 'as' => 'home', 'uses' => 'UsersController@home']);
Route::get('/logout', ['as' => 'logout', 'uses' => 'AuthController@logout']);
Route::resource('users', 'UsersController', ['only' => ['create', 'store']]);
