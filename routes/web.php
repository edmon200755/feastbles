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

Route::get('/post/id', [PostController::class, 'getone'])->where('id', '[1-5]');;
Route::get('/post/all', [PostController::class, 'pp']);
Route::get('/user/slc', [UserController::class, 'slc']);
Route::get('/user/srtsrt', [UserController::class, 'srtsrt']);
Route::get('/user/otst', [UserController::class, 'otst']);
Route::get('/user/koll', [UserController::class, 'koll']);
Route::get('/user/abz', [UserController::class, 'abz']);
Route::get('/user/orr', [UserController::class, 'orr']);
Route::get('/user/edt', [UserController::class, 'edt']);
Route::get('/user/nail', [UserController::class, 'nail']);
Route::get('/user/nsd', [UserController::class, 'nsd']);
Route::get('/user/ckl', [UserController::class, 'ckl']);
Route::get('/user/db', [UserController::class, 'db']);
