<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

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

Route::get('/user/names/{age}', [UserController::class, 'hello']);
Route::get('/user/names/{name}/{surname}', [UserController::class, 'namesurname']);
Route::get('/user/shows', [UserController::class, 'show']);
Route::get('/post/show', [PostController::class, 'show']);


