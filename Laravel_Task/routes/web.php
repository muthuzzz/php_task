<?php

use App\Http\Controllers\Post1Controller;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [Post1Controller::class, 'index']); //passing variables to view
Route::get('/task1',function(){
    return "<h1>Task 1 - Route creation</h1>";
});
Route::get('/task2',[PostController::class,'show']);//controller method calling
Route::get('/home',function(){
    return view('home');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
