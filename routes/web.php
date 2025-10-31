<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('welcome');
});

Route::get('r1', function() {
    return redirect('r2');
});

Route::get('r2', function() {
    return view('welcome');
});

Route::get('hello/{name?}', function($name = 'Everybody') {
    return 'Hello, ' . $name;
})->name('hello.index');
