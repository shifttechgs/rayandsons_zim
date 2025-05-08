<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\RedirectResponse;


class QuoteController
{
    public function getInstantQuote(Request $request): RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phoneNumber' => 'required|string|max:15',

            'service' => 'nullable|string|max:255',
            'comment' => 'required|string',
        ]);

        if ($validator->fails()) {
            return view('welcome') // Or the page you're rendering the form on
                ->withErrors($validator)
                ->withInput();
        }

        $data = $validator->validated();

        $contactEmail = env('CONTACT_EMAIL');
//dd($data);
        try {
                   Mail::to($contactEmail)->send(new ContactFormMail($data));
               } catch (\Exception $e) {
                   // Log the error message for debugging
                   logger()->error('Mail sending failed: ' . $e->getMessage());

                   return redirect()->route('contact-us.index')->with('error', 'An error occurred while sending your message. Please try again later.');
               }

               // Redirect back with a success message
               return redirect()->route('contact-us.index')->with('success', 'Your message has been sent successfully. Our sales expert will contact you shortly!');
           }
}
