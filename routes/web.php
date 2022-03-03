<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{UserController, MessageController, TopicController};



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [UserController::class, 'login']);

Route::get('/register', [UserController::class, 'register']);

Route::resource('topics', TopicController::class);

Route::resource('messages', MessageController::class);

