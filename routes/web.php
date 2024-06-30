<?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\HomeController;

    Route::get('/contact', function () {
        return view('contact');
    });

    Route::post('contact_mail', [HomeController::class, 'contact_mail_send' ]);
    //Route::post('/handle-form', [HomeController::class, 'handleForm']);

    Route::get('/index', function () {
        return view('index');
    });

    Route::get('/admin', function () {
        return view('admin');
    });
?>