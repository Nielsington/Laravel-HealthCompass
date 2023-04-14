<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\NewDayController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\ContactController;

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

Route::get('/', [HomepageController::class, 'show'])->name('home');
Route::get('/new-day', [NewDayController::class, 'show'])->name('newDay');
Route::get('/profile', [UserProfileController::class, 'show'])->name('userProfile');
Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::get('/about', [AboutController::class, 'show'])->name('about');