<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\DashboardController;

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


Route::get('/dashboard', [DashboardController::class, 'chart'])->name('chart');


Route::get('/movies', [MoviesController::class, 'index'])->name('movies')->middleware('auth');

Route::get('/addMovies', [MoviesController::class, 'addMovies'])->name('addMovies')->middleware('auth');
Route::post('/insert', [MoviesController::class, 'insert'])->name('insert');

Route::get('/findData/{id}', [MoviesController::class, 'findData'])->name('findData')->middleware('auth');
Route::post('/updateData/{id}', [MoviesController::class, 'updateData'])->name('updateData');

Route::get('/deleteData/{id}', [MoviesController::class, 'deleteData'])->name('deleteData');

Route::get('/login', [AuthenticationController::class, 'login'])->name('login');
Route::get('/register', [AuthenticationController::class, 'register'])->name('register');
Route::post('/logout', [AuthenticationController::class, 'logout'])->name('logout');
Route::post('/registerUser', [AuthenticationController::class, 'registerUser'])->name('register');
Route::post('/loginUser', [AuthenticationController::class, 'loginUser'])->name('loginUser');