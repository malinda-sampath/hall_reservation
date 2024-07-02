<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RequestModel;
use App\Mail\RequestSubmitted; 
use Illuminate\Support\Facades\Mail;


class HomeController extends Controller
{
    public function contact_mail_send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Create and save the request
        $requestModel = new RequestModel();
        $requestModel->name = $validated['name'];
        $requestModel->email = $validated['email'];
        $requestModel->subject = $validated['subject'];
        $requestModel->message = $validated['message'];
        $requestModel->save();

        // Get the request ID
        $requestId = $requestModel->id;

        // Send the email
        Mail::to('neudara66@gmail.com')->send(new RequestSubmitted($requestModel, $requestId));

        // Redirect back with success message
        return redirect()->back()->with('success', 'Your request has been submitted');
    }
}
