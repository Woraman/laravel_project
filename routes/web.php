<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view("index");
});

Route::get('/about', function () {
    return view("about");
});

Route::get('/blog', function () {
    return view("blog");
});

Route::get('/abouts',[AdminController::class,'abouts'])->name('abouts');
Route::get('/blogs',[AdminController::class,'blogs'])->name('blogs');
Route::get('/cerate',[AdminController::class,'cerate'])->name('cerate');