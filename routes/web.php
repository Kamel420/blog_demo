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
    return Redirect::to('/user/index');
})->name('base_url');

// Route::get('/home', function () {
//     return view('user.index');
// })->name('user.index');

Route::get('user/index', ['as'=>'user.index','uses'=>'UserController@index']);
Route::get('user/category/{category_id}', ['as' => 'user.category','uses' => 'UserController@category']);
Route::get('user/show/{id}', ['as' => 'user.show','uses' => 'UserController@show']);

// Route::get('/admin/home', function () {
//     return view('admin.index');
// })->name('admin.index');

Route::get('admin/index', ['as'=>'admin.index','uses'=>'PostsController@index']);
Route::get('admin/edit/{id}', ['as'=>'admin.edit','uses'=>'PostsController@edit']);
Route::patch('admin/update/{id}', ['as'=>'admin.update','uses'=>'PostsController@update']);
Route::delete('admin/{id}', ['as'=>'admin.destroy','uses'=>'PostsController@destroy']);
Route::get('admin/create', ['as'=>'admin.create','uses'=>'PostsController@create']);
Route::post('admin/store', ['as' => 'admin.store','uses' => 'PostsController@store']);
Route::get('admin/show/{id}', ['as' => 'admin.show','uses' => 'PostsController@show']);

Route::get('admin/category/{category_id}', ['as' => 'admin.category','uses' => 'PostsController@category']);

Route::get('category/index', ['as'=>'category.index','uses'=>'CategoriesController@index']);
Route::get('category/edit/{id}', ['as'=>'category.edit','uses'=>'CategoriesController@edit']);
Route::patch('category/update/{id}', ['as'=>'category.update','uses'=>'CategoriesController@update']);
Route::delete('category/{id}', ['as'=>'category.destroy','uses'=>'CategoriesController@destroy']);
Route::get('category/create', ['as'=>'category.create','uses'=>'CategoriesController@create']);
Route::post('category/store', ['as' => 'category.store','uses' => 'CategoriesController@store']);


