<?php

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/',[LandingPageController::class,'index'])->name('landing_page');
Route::get('/products',[ProductController::class,'index'])->name('products');
Route::get('/create/product',[ProductController::class,'create'])->name('create');
Route::post('/store/product',[ProductController::class,'store'])->name('store');
Route::get('/edit/product/{id}',[ProductController::class,'edit'])->name('edit');
Route::patch('/update/product/{id}',[ProductController::class,'update'])->name('update');
Route::delete('/delete/product/{id}',[ProductController::class,'destroy'])->name('delete');

Route::get('/users',[UserController::class,'index'])->name('users');
Route::get('/create/user',[UserController::class,'create'])->name('create_user');
Route::post('/store/user',[UserController::class,'store'])->name('store_user');
Route::get('/edit/user/{id}',[UserController::class,'edit'])->name('edit_user');
Route::patch('/update/user/{id}',[UserController::class,'update'])->name('update_user');
Route::delete('/delete/user/{id}',[UserController::class,'destroy'])->name('delete_user');