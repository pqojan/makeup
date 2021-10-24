<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class,'home'])->name('home');
Route::get('/order', [OrdersController::class,'index'])->name('order');
Route::get('/contact', [HomeController::class,'contact'])->name('contact');
Route::get('/about', [HomeController::class,'about'])->name('about');
Route::post('/order', [OrdersController::class,'signup'])->name('signup');

Route::match(['get','post'], '/send', [ContactController::class,'send']);

Route::get('/login',[UserController::class,'index'])->name('login');
Route::get('/logout',[UserController::class,'logout'])->name('logout');
Route::post('/login',[UserController::class,'login'])->name('userLogin');
Route::post('/register',[UserController::class,'register'])->name('register');
Route::get('/register',[UserController::class,'registerIndex'])->name('registerIndex');

Route::get('/admin',[AdminController::class,'index'])->middleware('admin')->name('admin');