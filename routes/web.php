<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\ProjectController;





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
     ->name('users.destroys');
  });
Auth::routes();
Route::get('projects', [ProjectController::class, 'index'])->name('projects.index');
Route::post('store-project-details-form', [ProjectController::class, 'store'])->name('store_project_details');
Route::get('projects/edit/{project}', [ProjectController::class, 'edit'])->name('projects.edit');
Route::put('projects/update/{project}', [ProjectController::class, 'update'])->name('projects.update');

