<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RequestModel;
use App\Mail\RequestSubmitted; 
use Illuminate\Support\Facades\Mail;
use PDF;


class ContactController extends Controller
{
    public function showContactForm()
    {
        return view('contact');
    }

    public function contact_mail_send(Request $request)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Create and save the request to get the request ID
        $requestModel = new RequestModel();
        $requestModel->name = $validated['name'];
        $requestModel->email = $validated['email'];
        $requestModel->subject = $validated['subject'];
        $requestModel->message = $validated['message'];
        $requestModel->save();

        // Get the request ID
        $requestId = $requestModel->id;

        // Ensure the 'pdf' directory exists
        $pdfDirectory = public_path('pdf');
        if (!file_exists($pdfDirectory)) {
            mkdir($pdfDirectory, 0777, true);
        }

        // Generate the PDF and store it in the public directory
        $pdf = PDF::loadView('pdf.form_submission', array_merge($validated, ['requestId' => $requestId]));
        $pdfPath = public_path("pdf/form_submission_{$requestId}.pdf");
        $pdf->save($pdfPath);

        // Update the request with the PDF path
        $requestModel->pdf_path = $pdfPath;
        $requestModel->save();

        // Send the email
        Mail::to('neudara66@gmail.com')->send(new RequestSubmitted($requestModel, $requestId));

        // Redirect to the confirmation page with the PDF path
        return redirect()->route('contact.confirmation', ['id' => $requestId])
                         ->with('success', 'Your request has been submitted');
    }

    public function showConfirmation($id)
    {
        $pdfPath = asset("pdf/form_submission_{$id}.pdf");
        return view('confirmation', ['pdfPath' => $pdfPath]);
    }

    

}


