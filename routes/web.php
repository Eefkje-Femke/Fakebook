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
Route::get('/follower', 'FollowController@yourfollowers');

Route::resource('posts', 'PostsController');
Auth::routes();

Route::get('/home', 'HomeController@index');
//Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/logout', 'LoginController@logout');

// Route::get('logout', 'Auth\AuthController@logout');
// Auth::logout();

//following
Route::get('/follow/{user_id}', [
    'uses' => 'FollowController@follow',
    'as' => 'followUser'
]);
Route::get('/unfollow/{user_id}', [
    'uses' => 'FollowController@unFollow',
    'as' => 'unfollowUser'
]);
