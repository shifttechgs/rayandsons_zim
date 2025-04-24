<?php

namespace App\Http\Controllers;
use Illuminate\View\View;

class ServicesController
{
    public function servicesPage(): View
    {
        return view('our_services'); // or your actual view path
    }
}
