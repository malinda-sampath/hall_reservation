<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
//use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
//use Illuminate\Mail\Mailables\Content;
//use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class RequestSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public $requestModel;
    public $requestId;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($requestModel, $requestId)
    {
        $this->requestModel = $requestModel;
        $this->requestId = $requestId;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.request_submitted')
                    ->with([
                        'requestModel' => $this->requestModel,
                        'requestId' => $this->requestId,
                    ]);
    }

    
}