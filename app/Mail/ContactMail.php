<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;


    /**
     * Create a new message instance.
     */
    public $details;
    public function __construct($details)
    {
        $this->details = $details;
    }

   /* public function build()
    {
        return $this->subject('New Contact Message-'. $this->details["subject"])
                    ->view('email.contact');
    }*/

  
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Contact Message-'. $this->details["subject"],
        );
    }
  
    public function content(): Content
    {
        return new Content(
            view: 'email.contact',
        );
    }
     
    public function attachments(): array
    {
        return [];
    }
}
