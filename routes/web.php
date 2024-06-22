<?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\HomeController;
    use App\Http\Controllers\Auth\LoginController;

    Route::get('/contact', function () {
        return view('contact');
    });

    Route::get('/index', function () {
        return view('index');
    });

    Auth::routes();
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // Authentication Routes
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    // Admin Routes
    Route::middleware(['auth'])->group(function () {
    Route::get('/home', 'AdminController@index')->name('home');
    });

    Auth::routes();
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
