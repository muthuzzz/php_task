<?php

// use Illuminate\Http\Request;

use App\Http\Controllers\Api\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/posts', function () {
    // return response()->json([
        // 'message' => 'API working'
         return \App\Models\Post::all();
    // ]);
});
Route::apiResource('posts', PostController::class);

