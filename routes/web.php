<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\authsController;
use App\Http\Controllers\CustomAuthController;
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

Route::get("/", [HomeController::class, "index"])->name('home');

Route::prefix("login")->name("login.")->group(function () {
    Route::get("/", [CustomAuthController::class, "login"])->name("index")->middleware('alreadyLoggedIn');
    Route::get("/register", [CustomAuthController::class, "registration"])->name("registration")->middleware('alreadyLoggedIn');
    Route::post("/register",[CustomAuthController::class, "registerUser"])->name("register-user");
    Route::post("/user",[CustomAuthController::class, "loginUser"])->name("user");
    Route::get("/dashboard",[CustomAuthController::class, "dashboard"])->name("dashboard");
});

Route::prefix("auth")->name("auth.")->group(function() {
    Route::get("/user", [CustomAuthController::class, "userProfile"])->name("user-profile")->middleware('isLoggedIn');
    Route::get("/admin", [CustomAuthController::class, "adminManage"])->name("admin-manage");
    Route::get("/manager", [CustomAuthController::class, "managerManage"])->name("manager-manage");
    Route::get("/logout", [CustomAuthController::class, "logout"])->name("logout");

});

Route::prefix("search")->name("search.")->group(function () {
    Route::get("/", [HomeController::class, "index"])->name("home");
    Route::get("/{attribute}", [HomeController::class, "index"])->name("attribute");
});
