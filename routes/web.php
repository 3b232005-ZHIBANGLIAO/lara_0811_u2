<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// 根目錄
Route::get('/', function() {
    return view('welcome');
});

// r1 → r2 轉向
Route::get('r1', function() {
    return redirect('r2');
});

Route::get('r2', function() {
    return view('welcome');
});

// hello 路由，帶參數，可命名
Route::get('hello/{name?}', function($name = 'brian') {
    return 'Hello, ' . $name;
})->name('hello.index');

// dashboard 路由
Route::get('dashboard', function() {
    return 'dashboard';
});

// admin 前置群組
Route::group(['prefix' => 'admin'], function() {
    Route::get('dashboard', function() {
        return 'admin dashboard';
    });
});

Route::get('/home', [HomeController::class, 'index'])->name('home.index');