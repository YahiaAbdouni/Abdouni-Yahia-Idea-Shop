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


Route::get('/', 'HomeController@welcome')->name('welcome');

Route::get('/posts/{post}', 'HomeController@post')->name('post-show');

Route::get('/categories/{category}', 'HomeController@category')->name('category-show');

Route::get('/user/{user}', 'HomeController@user')->name('user-show');

Route::resource('user/category', 'UserCategoriesController');

Route::resource('user/post', 'UserPostsController');

Route::get('/user/{user}/edit', 'HomeController@editUser')->name('edit-user');

Route::post('user/{user}/update-user', 'HomeController@update')->name('update-user');

Auth::routes();


Route::group(['middleware' => ['admin']], function () {

    
    Route::get('/welcome', 'HomeController@index');
    
    Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('admin/categories', 'CategoriesController');

    Route::resource('admin/posts', 'PostsController');

    Route::resource('admin/users', 'UsersController');

});
