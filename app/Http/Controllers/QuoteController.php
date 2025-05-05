<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class QuoteController
{


    public function getInstantQuote(Request $request): View
    {
       // dd($request);
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phoneNumber' => 'required|string|max:15',

            'source' => 'nullable|string|max:255',
            'service' => 'nullable|string|max:255',
            'comment' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect('/home')
                ->withErrors($validator)
                ->withInput();
        }

        // Extract validated data
        $data = $validator->validated();

        // Send the contact form data via email
        $contactEmail = env('CONTACT_EMAIL');

        try {
            Mail::to($contactEmail)->send(new ContactFormMail($data));
        } catch (\Exception $e) {
            // Log the error message for debugging
            logger()->error('Mail sending failed: ' . $e->getMessage());

            return redirect('/home')->with('error', 'An error occurred while sending your message. Please try again later.');
        }

        // Redirect back with a success message
        return redirect('/home')->with('success', 'Your message has been sent successfully. Our sales expert will contact you shortly!');
    }


}
