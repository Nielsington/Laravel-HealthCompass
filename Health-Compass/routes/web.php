<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\NewDayController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\ContactController;
use App\Models\ActivityLog;
use Illuminate\Support\Carbon;

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

Route::get('/', [DashboardController::class, 'show'])->name('dashboard');
Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::get('/about', [AboutController::class, 'show'])->name('about');

Route::get('/create-activity', [DashboardController::class, 'showActivityForm'])->name('activityForm');
Route::post('/submit-activity', [DashboardController::class, 'handleActivityForm']);

Route::get('/create-sleep', [DashboardController::class, 'showSleepForm']);
Route::post('/submit-sleep', [DashboardController::class, 'handleSleepForm']);

Route::get('/{ActivityLog:Activity_type', function(ActivityLog $Activity_type)
    {
        $Activities = $Activity_type->whereDate('created_at', '=', Carbon::today())->get();
        return view('allActivities', ['Activities' => $Activities]);
    })->name('all-activities');

Route::post('/submit-steps', [DashboardController::class, 'handleStepsForm']);

Route::post('/submit-mood', [DashboardController::class, 'handleMoodForm']);

//TODO: detail page ->name('detail');