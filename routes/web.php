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
Route::get('/user', [UserManageController::class, 'index'])->name('user.index');
Route::match(['get', 'post'],'/user/{id}/edit', [UserManageController::class,'edit'])->name('user.edit');
Route::delete('/user/{id}',  [UserManageController::class,'destroy'])->name('user.delete');
Route::match(['get', 'post'], '/user/create', [UserManageController::class, 'showForm'])->name('user.showForm');
Route::post('/register', [UserManageController::class, 'create'])->name('user.create');
Route::match(['get', 'post'],'/user/close', [UserManageController::class, 'close'])->name('user.close');
Route::put('/user/update/{id}', [UserManageController::class, 'update'])->name('user.update');
//Route::resource('user', UserManageController::class);

