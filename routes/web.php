<?php

use Illuminate\Support\Facades\Route;
//controller người dùng
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProductController;
use App\Http\Controllers\frontend\ContactController;

//controller quản lý


Route::get('/',[HomeController::class,'index'])->name('site.name');
Route::get('products',[ProductController::class,'index'])->name('site.product');
Route::get('product-detail/{slug}',[ProductController::class,'detail'])->name('site.product.detail');
Route::get('contact',[ContactController::class,'index'])->name('site.contact');

