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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/post',[App\Http\Controllers\PostController::class,'index'])->name('index');
Route::get('/post/create',[App\Http\Controllers\PostController::class,'create'])->name('post.create')->middleware('role:SuperAdmin|Admin|Writer');
Route::post('/post',[App\Http\Controllers\PostController::class,'store'])->name('post.store');
Route::get('/post/{id}/edit',[App\Http\Controllers\PostController::class,'edit'])->name('post.edit')->middleware('permission:edit post');
Route::put('/post/{id}',[App\Http\Controllers\PostController::class,'update'])->name('post.update');
Route::get('{id}',[App\Http\Controllers\PostController::class,'destroy'])->name('post.delete')->middleware('permission:delete post');

Route::group(['as'=>'permission.', 'prefix'=>'permission'], function(){
    Route::get('permisssion', 'PermissionController@index')->name('index')->middleware('role:SuperAdmin|Admin');
    Route::get('create', 'PermissionController@create')->name('create')->middleware('role:SuperAdmin');
    Route::post('', 'PermissionController@store')->name('store');
    Route::get('permission/{id}/edit','PermissionController@edit')->name('edit')->middleware('role:SuperAdmin');
    Route::put('permission/{id}','PermissionController@update')->name('update');
    Route::get('{id}','PermissionController@destroy')->name('delete')->middleware('role:SuperAdmin');
});

Route::group(['as'=>'role.', 'prefix'=>'role'], function(){
    Route::get('role', 'RoleController@index')->name('index')->middleware('role:SuperAdmin|Admin');
    Route::get('create', 'RoleController@create')->name('create')->middleware('role:SuperAdmin');
    Route::post('', 'RoleController@store')->name('store');
    Route::get('role/{id}/edit', 'RoleController@edit')->name('edit')->middleware('role:SuperAdmin');
    Route::put('role/{id}', 'RoleController@update')->name('update');
    Route::get('{id}', 'RoleController@destroy')->name('delete')->middleware('role:SuperAdmin');

});

Route::group(['as'=>'user.', 'prefix'=>'user'], function(){
    Route::get('index', 'UserController@index')->name('index');
    Route::get('create', 'UserController@create')->name('create')->middleware('role:SuperAdmin|Admin');
    Route::post('', 'UserController@store')->name('store');
    Route::get('user/{id}/edit', 'UserController@edit')->name('edit')->middleware('role:SuperAdmin|Admin');
    Route::put('user/{id}', 'UserController@update')->name('update');
    Route::get('{id}', 'UserController@destroy')->name('destroy')->middleware('role:SuperAdmin|Admin');
});