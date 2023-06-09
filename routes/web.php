<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mainController;
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

Route::get('/', [mainController::class , "homePage"]);
Route::get('/about', [mainController::class , "aboutPage"]);

Route::post('/register', [UserController::class , "registerUser"]);
Route::post('/login', [UserController::class , "loginUser"]);
Route::post('/logout', [UserController::class , "logoutUser"]);