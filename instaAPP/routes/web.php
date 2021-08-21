<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SettingsController;

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

// Route::get('/', function () {
//     return view('homepage');
// });

Route::get('/', [HomeController::class, 'home']);
Route::get('/chat', [ChatController::class, 'chat']);
Route::get('/bookmark', [BookController::class, 'bookmark']);
Route::get('/profil', [ProfilController::class, 'profil']);
Route::get('/settings', [SettingsController::class, 'settings']);
