<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;
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

Route::get('/', [pageController::class,'welcome'])->name('welcome');

Route::get('/login', [pageController::class,'login'])->name('login');

Route::get('/register', [pageController::class,'register'])->name('register');

Route::get('/dashboard', [pageController::class,'dashboard'])->name('dashboard');

Route::get('/user/details/{id}', [pageController::class,'user']);

