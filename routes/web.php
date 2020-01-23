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

//PagesController
Route::get('/', 'PagesController@index');

Auth::routes();

//Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/logout', 'LoginController@logout');

// Route::get('logout', 'Auth\AuthController@logout');
// Auth::logout();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('profile', 'ProfileController');
Route::get('/profile', 'ProfileController@index')->name('profile.index');
Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', 'HomeController@index');
    Route::resource('posts', 'PostsController');

    //following
    Route::get('/follower', 'FollowController@followUser');
    Route::get('/follow/{user_id}', [
        'uses' => 'FollowController@follow',
        'as' => 'followUser'
    ]);
    Route::get('/unfollow/{user_id}', [
        'uses' => 'FollowController@unFollow',
        'as' => 'unfollowUser'
    ]);
   });
   
