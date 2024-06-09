<?php
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('login',[AuthController::class ,'login'])->name('login');
Route::post('login',[AuthController::class ,'login'])->name('login');
Route::get('register',[AuthController::class,'register'])->name('register');
Route::post('register',[AuthController::class,'register'])->name('register');
Route::get('logout',[AuthController::class,'logout'])->name('logout');
Route::get('/', [AuthController::class, 'showLoginForm']);