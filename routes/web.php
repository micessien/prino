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
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/checkemail', 'HomeController@checkemail');

Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');
Route::get('profile', 'UserController@profile');
Route::post('profile', 'UserController@update_avatar');


Route::get('/projects/create', 'ProjectController@create')->name('projects.create');
Route::post('/projects/create', 'ProjectController@store')->name('projects.store');
Route::get('/projects/create-step-2', 'ProjectController@createstep2')->name('projects.create-step-2');
Route::get('/projects/create-step-3', 'ProjectController@createstep3')->name('projects.create-step-3');
Route::get('/projects/create-step-4', 'ProjectController@createstep4')->name('projects.create-step-4');
Route::get('/projects/create-step-5', 'ProjectController@createstep5')->name('projects.create-step-5');

// Route::patch('users/{user}/update',  ['as' => 'users.update', 'uses' => 'UserController@update']);
// Route::patch('users/{user}/update',  ['as' => 'users.update', 'uses' => 'UserController@update']);
