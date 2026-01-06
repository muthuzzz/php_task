<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
// use Illuminate\View\View;
Route::resource('posts', PostController::class);
Route::get('/test',function(){return "Laravel working";}
);
Route::get("/sample",function(){
   return view('welcome');
}
);
// Route::get('/', [PostController::class, 'index']);
// Route::get('/posts/create', [PostController::class, 'create']);
// Route::post('/posts', [PostController::class, 'store']);
// Route::get('/posts/{id}/edit', [PostController::class, 'edit']);
// Route::put('/posts/{id}', [PostController::class, 'update']);
// Route::delete('/posts/{id}', [PostController::class, 'destroy']);
// Route::get('/', function () {
//     return view('welcome');
// });
