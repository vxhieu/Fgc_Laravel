<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserManageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//})
//Route::get('/user', [UserManageController::class, 'index']);
//Route::post('/user', 'UserManageController@store')->name('user.store');
//Route::get('/user/{id}/edit', 'UserManageController@edit')->name('user.createupdate');
//Route::delete('/user/{id}', 'UserManageController@destroy')->name('user.destroy');
//Route::post('/register', 'UserManageController@showRegistrationForm')->name('register');
Route::resource('user', UserManageController::class);

