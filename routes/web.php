<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', 'TweetController@index')->name('home');
Route::post('/tweets', 'TweetController@store');

Route::get('/profile/{user:userName}', 'ProfilesController@show')->name('profile.show');
Route::get('/profile/{user:userName}/edit', 'ProfilesController@edit')->name('profile.edit');
Route::patch('/profile/{user:userName}', 'ProfilesController@update');

Route::get('/explore', 'ExploreController@index')->name('explore');

Route::post('/profiles/{user:userName}/follow', 'FollowsController@store')->name("follow");

Route::post('/tweets/{tweet}/like', 'LikeController@store');
Route::delete('/tweets/{tweet}/like', 'LikeController@destroy');
