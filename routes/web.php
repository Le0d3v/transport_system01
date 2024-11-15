<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UsersController;
use Illuminate\Routing\Router;

Route::get('/', function () {
    return view('app');
});

Route::get("/login", [LoginController::class, "index"])->name("login");
Route::post("/login", [LoginController::class, "store"])->name("login.store");
Route::get("/register", [RegisterController::class, "index"])->name("register");
Route::post("/register", [RegisterController::class, "store"])->name("register.store");

Route::get("/dashboard", [UsersController::class, "index"])->name("users.index");

// Zona de Administración
Route::get("/admin", [AdminController::class, "index"])->name("admin");