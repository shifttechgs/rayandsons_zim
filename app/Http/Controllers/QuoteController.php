<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class QuoteController
{


    public function getInstantQoute(): View
    {
        return view('contact-us'); // or your actual view path
    }


}
