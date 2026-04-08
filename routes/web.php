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

Route::get('/user/edt', [UserController::class, 'edt']);
Route::get('/user/nail', [UserController::class, 'nail']);
Route::get('/user/nsd', [UserController::class, 'nsd']);
Route::get('/user/ckl', [UserController::class, 'ckl']);
Route::get('/user/db', [UserController::class, 'db']);
