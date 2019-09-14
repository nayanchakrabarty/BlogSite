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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'HomeController@index')->name('home');
Route::get('post-details/{id}', 'HomeController@post_details')->name('post.details');
Route::get('category/{id}', 'HomeController@category_posts')->name('category.posts');

Route::get('login', 'LoginController@loginForm')->name('user.login.form');
Route::post('login', 'LoginController@login')->name('user.login');

Route::middleware('auth')->prefix('admin')->group(function (){
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('profile', 'UserController@index')->name('user.profile');
    Route::resource('author', 'AuthorController');
    Route::resource('category', 'CategoryController');
    Route::resource('post', 'PostController');
});

Route::get('logout',function (){
    auth()->logout();
    return redirect()->route('user.login.form');
});

