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

Route::get('/user/clacss', [UserController::class, 'clacss']);
Route::get('/user/sd', [UserController::class, 'sod']);
Route::get('/user/it', [UserController::class, 'iter']);
Route::get('/user/uz', [UserController::class, 'users']);
Route::get('/user/html', [UserController::class, 'html']);
Route::get('/user/dt', [UserController::class, 'datka']);
Route::get('/user/ch', [UserController::class, 'chetnie']);
Route::get('/user/pl', [UserController::class, 'plus']);
Route::get('/user/cp', [UserController::class, 'cpicok']);
Route::get('/user/kor', [UserController::class, 'kor']);
Route::get('/user/sq', [UserController::class, 'square']);
Route::get('/user/sq', [UserController::class, 'square']);
Route::get('/user/ul', [UserController::class, 'ul']);
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