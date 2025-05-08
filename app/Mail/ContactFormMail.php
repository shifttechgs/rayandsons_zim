<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @param array $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
   // logger()->info('ContactFormMail data:', $this->data);
      //dd(view()->exists('mail.contact_form')); // Replace with your view name
     // dd(view('mail.contact_form', ['data' => $this->data])->render());


        return $this->markdown('mail.contact_form')
            ->with('data', $this->data)
            ->subject('New Contact Form Submission');

    }
}
