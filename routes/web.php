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
// home
Route::get('/', 'indexController@index');
//  posts
Route::get('/post/{post}', 'indexController@post')->name('post');
 //  categorys
Route::get('category/{categorys}', 'categoryController@index')->name('categorys');
// authors
// Route::get('/author', 'authorController@index')->name('author');

Auth::routes();

Route::prefix('admin')->middleware('auth')->group(function(){
    Route::get('/home', 'HomeController@index')->name('admin.home');
    // controllers post
    // home index
    Route::get('/posts', 'AdminController@index')->name('admin.posts');
    // new post and save new post
    Route::get('/post/newPost', 'AdminController@create')->name('admin.create');
    Route::post('/post/newPost', 'AdminController@save')->name('admin.save');
    // delete post
    Route::get('/posts/cancella/{post}', 'AdminController@delete')->name('admin.posts.delete');
    //  edit post
    Route::match(['get', 'post'], '/post/edit/{post}', 'AdminController@edit')->name('admin.posts.edit');
    // all category index edit and save category
    Route::get('/categorys', 'AdminCategoryController@index')->name('admin.categorys');
    Route::match(['get', 'post'], '/category/edit/{category}', 'AdminCategoryController@edit')->name('admin.categorys.edit');
    // create and save new category
    Route::get('/category/newCategory', 'AdminCategoryController@create')->name('admin.category.create');
    Route::post('/category/newCategory', 'AdminCategoryController@save')->name('admin.category.save');
    // delete category
    Route::get('/categorys/cancella/{category}', 'AdminCategoryController@delete')->name('admin.categorys.delete');
    // all author index
    Route::get('/author', 'AdminAuthorController@index')->name('admin.author');
    // edit and save author
    Route::match(['get', 'post'], '/author/edit/{author}', 'AdminAuthorController@edit')->name('admin.author.edit');
    // create new author
    Route::get('/author/newAuthor', 'AdminAuthorController@create')->name('admin.author.create');
    // save new author
    Route::post('/author/newAuthor', 'AdminAuthorController@save')->name('admin.author.save');
    // delete author
    Route::get('/author/cancella/{author}', 'AdminAuthorController@delete')->name('admin.author.delete');
});
