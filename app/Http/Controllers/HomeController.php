<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Mail;

class HomeController extends Controller
{
    //
    public function contact_mail_send(Request $request)
    {
        //dd($request->all());
        Mail::to('neudara66@gmail.com')->send(new ContactMail($request));
        return redirect('contact');
    }

    
}
