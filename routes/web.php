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
Route::get('/post/create',[App\Http\Controllers\PostController::class,'create'])->name('post.create')->middleware('role:author|admin');
Route::post('/post',[App\Http\Controllers\PostController::class,'store'])->name('post.store');
Route::get('/post/{id}/edit',[App\Http\Controllers\PostController::class,'edit'])->name('post.edit')->middleware('permission:edit post');
Route::put('/post/{id}',[App\Http\Controllers\PostController::class,'update'])->name('post.update');
Route::get('{id}',[App\Http\Controllers\PostController::class,'destroy'])->name('post.delete');

