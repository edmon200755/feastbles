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

Route::get('/user/summa', [UserController::class, 'sumas']);
Route::get('/user/un', [UserController::class, 'unless']);
Route::get('/user/rov', [UserController::class, 'rovno']);
Route::get('/user/voz', [UserController::class, 'vozrast']);
Route::get('/user/vz', [UserController::class, 'vozr']);
Route::get('/user/comm', [UserController::class, 'comm']);
Route::get('/user/zh', [UserController::class, 'zhir']);
Route::get('/user/vr', [UserController::class, 'vremya']);
Route::get('/user/pot', [UserController::class, 'pot']);
Route::get('/user/city', [UserController::class, 'gorod']);
Route::get('/user/mas', [UserController::class, 'mas']);
Route::get('/user/sotr', [UserController::class, 'sotr']);
Route::get('/user/artem', [UserController::class, 'date']);
Route::get('/user/href', [UserController::class, 'href']);
Route::get('/user/red', [UserController::class, 'red']);
Route::get('/user/{age}/{name}/{surname}', [UserController::class, 'class']);
Route::get('/user/num2', [UserController::class, 'num2']);
Route::get('/user/{name}/{age}/{salary}', [UserController::class, 'nas']);
Route::get('/user/names/{age}', [UserController::class, 'hello']);
Route::get('/user/names/{name}/{surname}', [UserController::class, 'namesurname']);
Route::get('/user/shows', [UserController::class, 'show']);
Route::get('/post/show', [PostController::class, 'show']);