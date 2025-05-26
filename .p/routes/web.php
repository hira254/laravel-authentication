<?php

use App\Http\Controllers\authController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



route::get("/register",[AuthController::class,"registerForm"]);
route::get("/login",[AuthController::class,"loginForm"]);
route::post("/register",[AuthController::class,"register"]);
route::post("/login",[AuthController::class,"login"]);
route::post("/logout",[AuthController::class,"logout"]);
route::get("/dashboard",[AuthController::class,"dashboard"]);