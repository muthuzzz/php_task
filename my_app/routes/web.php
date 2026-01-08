<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MobileAuthController;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/mobile-login', [MobileAuthController::class, 'showLogin'])->name('mobile.login');
Route::post('/mobile-login',[MobileAuthController::class,'login'])->name('mobile-login.submit');
Route::post('/mobile-logout',[MobileAuthController::class,'logout'])->name('mobile.logout');
require __DIR__ . '/auth.php';
