<?php

    use Illuminate\Support\Facades\Route;

    Route::get('/contact', function () {
        return view('contact');
    });

    Route::get('/index', function () {
        return view('index');
    });

    Route::get('/admin', function () {
        return view('admin');
    });

    Route::get('/login', function () {
        return view('admin-login');
    });

    Route::get('/', function () {
        return view('index');
    })->name('home');
?>