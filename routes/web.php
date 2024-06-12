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
?>