<?php

use App\Http\Controllers\UserController;
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
    return view('home');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/linux', [App\Http\Controllers\LinuxController::class, 'index'])->name('linux');
Route::get('/windows', [App\Http\Controllers\WindowsController::class, 'index'])->name('windows');
Route::get('/mac', [App\Http\Controllers\MacController::class, 'index'])->name('mac');

Auth::routes();

Route::group(['middleware'=> ['auth']], function() {
    Route::resource('user', UserController::class);
    Route::get('/user/{user}/delete', [UserController::class, 'destroy'])->name('user.delete');


});
