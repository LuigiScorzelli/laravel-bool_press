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

Route::get('/', 'indexController@index');

Route::get('/post/{post}', 'indexController@post')->name('post');
 // controller categorys
Route::get('category/{categorys}', 'categoryController@index')->name('categorys');

// Route::get('/author', 'authorController@index')->name('author');

Auth::routes();

Route::prefix('admin')->middleware('auth')->group(function(){
    Route::get('/home', 'HomeController@index')->name('admin.home');
    Route::get('/posts', 'AdminController@index')->name('admin.posts');
    Route::match(['get', 'post'], '/post/edit/{post}', 'AdminController@edit')->name('admin.posts.edit');
    //category
    Route::get('/categorys', 'AdminCategoryController@index')->name('admin.categorys');
    Route::match(['get', 'post'], '/category/edit/{category}', 'AdminCategoryController@edit')->name('admin.categorys.edit');

    // author
    Route::get('/author', 'AdminAuthorController@index')->name('admin.author');
    Route::match(['get', 'post'], '/author/edit/{author}', 'AdminAuthorController@edit')->name('admin.author.edit');

});
