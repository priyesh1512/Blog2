<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;

// Display all posts
Route::get('/posts', [PostController::class, 'index']);

// Display form to create a new post
Route::get('/posts/create', [PostController::class, 'create']);

// Store new post (POST method)
Route::post('/posts', [PostController::class, 'store']);

// Show a specific post by ID
Route::get('/posts/{id}', action: [PostController::class, 'show']);

Route::delete('/posts/{id}', [PostController::class, 'destroy']);

