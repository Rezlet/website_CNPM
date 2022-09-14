<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LoginController;
use Illuminate\Http\Response;
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

Route::get("/" , [HomeController::class, "index"])->name('home');

Route::prefix("login")->name("login.")->group(function () {
    Route::get("/", [LoginController::class, "login"])->name("index");
    Route::get("/register", [LoginController::class, "registration"])->name("register");

});