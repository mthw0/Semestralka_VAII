<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('home'); });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/linux', [App\Http\Controllers\LinuxController::class, 'index'])->name('linux');
Route::get('/windows', [App\Http\Controllers\WindowsController::class, 'index'])->name('windows');
Route::get('/mac', [App\Http\Controllers\MacController::class, 'index'])->name('mac');

Route::get('/posts', [App\Http\Controllers\PostController::class, 'index'])->name('posts');
Route::resource('posts', 'App\Http\Controllers\PostController');
Route::resource('comments', 'App\Http\Controllers\CommentController');



Auth::routes();

Route::group(['middleware'=> ['auth']], function() {
    Route::resource('user', UserController::class);
    Route::get('/user/{user}/delete', [UserController::class, 'destroy'])->name('user.delete');


});
