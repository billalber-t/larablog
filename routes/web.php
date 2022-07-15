<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Clockwork\Storage\Search;


Route::get('/', [PostController::class, 'index']);

Route::get('/posts/{post:slug}', [PostController::class, 'show']);
