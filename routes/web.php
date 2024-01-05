<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
//INDEX
Route::get('/', [UserController::class, 'index'])->name('index');
//CREATE VIEW
Route::get('/users/create', [UserController::class, 'create'])->name('user.create');
//DELETE
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('user.destroy');
//SHOW
Route::get('/users/{id}', [UserController::class, 'show'])->name('user.show');
//EDIT
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
//STORE
Route::post('/users', [UserController::class, 'store'])->name('user.store');
//UPDATE
Route::put('/users/{id}', [UserController::class, 'update'])->name('user.update');

Route::get('/address', [AddressController::class, 'index'])->name('address.index');

Route::post('/address', [AddressController::class, 'store'])->name('address.store');

Route::get('/address/{id}/edit', [AddressController::class, 'edit'])->name('address.edit');

Route::delete('/address/{id}', [AddressController::class, 'destroy'])->name('address.destroy');

Route::put('/address/{id?}', [AddressController::class, 'update'])->name('address.update');

Route::get('/address/asign',[AddressController::class, 'asign'])->name('address.asign');

Route::resource('posts',PostController::class);
Route::resource('subjects',SubjectController::class);