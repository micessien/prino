<?php

use App\User;
use App\Project;
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
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});

Route::get('/', function () {
    return view('welcome');
});

Route::post('/contact', [
    'uses' => 'ContactMessageController@store',
    'as' => 'contact.store'
]);

// Route::get('/projects/create', function () {

//     $user = User::findOrFail(1);
//     echo $user->projects->user_id;

// });

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/checkemail', 'HomeController@checkemail');

Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');
Route::get('profile', 'UserController@profile');
Route::post('profile', 'UserController@update_avatar');

// Confirm registation
Route::get('hydrocarbures', 'InscriptionController@index')->name('hydrocarbures');
Route::get('energie', 'InscriptionController@energie')->name('energie');
Route::get('envoyer', 'InscriptionController@mail')->name('mail');
Route::get('confirmation', 'ConfirmController@index')->name('confirm');
Route::get('felicitation', 'ConfirmController@congrats')->name('congrats');

Route::get('/projects/index', 'ProjectController@index')->name('projects.index');
Route::post('/projects/create', 'ProjectController@create')->name('projects.create');

Route::get('/projects/index2', 'ProjectController@index2')->name('projects.index2');
Route::post('/projects/create2', 'ProjectController@create2')->name('projects.create2');

Route::get('/projects/index3', 'ProjectController@index3')->name('projects.index3');
Route::post('/projects/create3', 'ProjectController@create3')->name('projects.create3');

Route::get('/projects/index4', 'ProjectController@index4')->name('projects.index4');
Route::post('/projects/create44', 'ProjectController@create44')->name('projects.create44');

Route::get('/projects/index5', 'ProjectController@index5')->name('projects.index5');
Route::post('/projects/create5', 'ProjectController@create5')->name('projects.create5');

Route::get('/projects/index6', 'ProjectController@index6')->name('projects.index6');
Route::post('/projects/create4', 'ProjectController@create4')->name('projects.create4');

Route::get('/projects/create-step-2', 'ProjectController@createstep2')->name('projects.create-step-2');

Route::get('/projects/create-step-3', 'ProjectController@createstep3')->name('projects.create-step-3');

Route::get('/projects/create-step-4', 'ProjectController@createstep4')->name('projects.create-step-4');

Route::get('/projects/create-step-5', 'ProjectController@createstep5')->name('projects.create-step-5');

Route::group(['prefix' => 'users'], function() {
    Route::get('confirmation-de-compte', 'UserController@accountActivated')->name('users.account-activated');
    Route::post('store', 'UserController@store')->name('users.store');
});

// Route::patch('users/{user}/update',  ['as' => 'users.update', 'uses' => 'UserController@update']);
// Route::patch('users/{user}/update',  ['as' => 'users.update', 'uses' => 'UserController@update']);