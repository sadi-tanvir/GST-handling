<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('layout.app');
});


Route::get("/login", [AuthController::class, 'loginView'])->name("login.view");
Route::get("/register", [AuthController::class, 'registerView'])->name('register.view');
Route::post("/register/post", [AuthController::class, 'registerPost'])->name('register.post');
Route::get("/forgot-password", [AuthController::class, "forgotPasswordView"])->name("forgot-password.view");
