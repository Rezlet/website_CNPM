<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
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

#region login
Route::prefix("login")->name("login.")->group(function () {
    Route::get("/", [CustomAuthController::class, "login"])->name("index")->middleware('alreadyLoggedIn');
    Route::get("/register", [CustomAuthController::class, "registration"])->name("registration")->middleware('alreadyLoggedIn');
    Route::post("/register", [CustomAuthController::class, "registerUser"])->name("register-user");
    Route::post("/user", [CustomAuthController::class, "loginUser"])->name("user");
    Route::get("/dashboard", [CustomAuthController::class, "dashboard"])->name("dashboard");
});
#endregion login

#region auth
Route::prefix("auth")->name("auth.")->group(function () {
    Route::get("/user", [CustomAuthController::class, "userProfile"])->name("user-profile")->middleware('isLoggedIn');
    Route::get("/admin", [CustomAuthController::class, "adminManage"])->name("admin-manage");
    Route::get("/manager", [CustomAuthController::class, "managerManage"])->name("manager-manage");
    Route::get("/logout", [CustomAuthController::class, "logout"])->name("logout");
    Route::put("/change", [CustomAuthController::class, "change"])->name("change");
    Route::get("/delete/{id}", [CustomAuthController::class, "delete"])->name("delete");
});
#endregion

#region search
Route::prefix("search")->name("search.")->group(function () {
    Route::get("/", [HomeController::class, "index"])->name("home");
    Route::get("/{attribute}", [HomeController::class, "index"])->name("attribute");
    Route::get("/{category}", [HomeController::class, "index"])->name("category");
});
#endregion search 


Route::prefix("cart")->name("cart.")->group(function() {
    Route::get("/",[ CartController::class, "index"])->name("index")->middleware('notLoggedIn');
    Route::get("/delete-id/{id}", [CartController::class, "deleteId"])->name("delete-id");
});


Route::prefix("products")->name("products.")->group(function () {
    Route::get("/", [ProductController::class, "index"])->name("home");
    Route::get("/{title}", [ProductController::class, "productDetails"])->name("detail");
    Route::post("/{title}", [ProductController::class, "productOrder"])->name("order")->middleware('notLoggedIn');
});

Route::prefix("order")->name("order.")->group(function () {
    Route::post("/", [OrderController::class, "pay"])->name("pay");
});