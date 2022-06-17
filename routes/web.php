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

Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/admin',[App\Http\Controllers\UserController::class, 'index'], function () {
      return view('user.index');
    })->name('dashboard');
    Route::resource('users', 'UserController');
    Route::get('/users/delete/{id}', 'UserController@destroy')
     ->name('users.destroy');
  });

Auth::routes();




