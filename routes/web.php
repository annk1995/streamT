<?php

use App\Http\Controllers\ChannelController;
use App\Http\Controllers\ClientRegistrationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RecommendedController;
use App\Http\Controllers\talent\HomeTalentController;
use App\Http\Controllers\talent\MyContentController;
use App\Http\Controllers\talent\TalentProfileController;
use App\Http\Controllers\talent\TalentRegisterController;
use App\Http\Controllers\talent\UploadController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
/**General user routes **/
Route::middleware(['auth', 'verified'])->get('/dashboard', [DashboardController::class, 'UserDashboard'])->name('dashboard');

/**Admin routes **/
Route::middleware('adminAuth')->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'adminDashboard'])->name('adminDashboard');
});

/**Super Admin routes **/
Route::middleware('TalentAuth')->prefix('talent')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'talentDashboard'])->name('talentDashboard');
});

require __DIR__ . '/auth.php';
// channel
Route::get('/channels', [ChannelController::class, 'userchannels'])->name('channels');


// home

Route::get('/client', [HomeController::class, 'userhome'])->name('home');
// history


Route::get('/history', [HistoryController::class, 'history'])->name('history');

// recommended

Route::get('/recommended', [RecommendedController::class, 'recommended'])->name('recommended');
// registration
Route::get('/clientregistration', [ClientRegistrationController::class, 'clientregistration'])->name('clientregistration');


// Tallent
Route::get('/talent', [HomeTalentController::class, 'talenthome'])->name('home');

Route::get('/talentprofile', [TalentProfileController::class, 'talentprofile'])->name('modelprofile');
Route::get('/uploadvideo', [UploadController::class, 'uploadvideo'])->name('uploadvideo');
Route::get('/mycontent', [MyContentController::class, 'mycontent'])->name('mycontent');
// talent registration
Route::get('/talentregistration', [TalentRegisterController::class, 'talentregistration'])->name('talentregistration');
// talent store form data
Route::post('/talentregister', [TalentRegisterController::class, 'store'])->name('talent.register');






