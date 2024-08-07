<?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\HomeController;
    use App\Http\Controllers\ContactController;
    use App\Http\Controllers\Auth\LoginController;
    use App\Http\Controllers\HallController;

    Route::get('/contact', function () {
        return view('contact');
    });

    Route::get('/index', function () {
        return view('index');
    });

    Route::get('/index', function () {
        return view('index');
    })->name('index');

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

    //Contact Routes
    Route::get('/contact', [ContactController::class, 'showContactForm'])->name('contact.form');
    Route::post('contact_mail', [ContactController::class, 'contact_mail_send' ]);
    Route::get('/confirmation/{id}', [ContactController::class, 'showConfirmation'])->name('contact.confirmation');

    Auth::routes();
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    
Route::get('/halls', [HallController::class, 'index']);
