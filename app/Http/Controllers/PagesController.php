<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PagesController
{
    public function aboutUsPage(): View
    {
        return view('about-us'); // or your actual view path
    }

    public function contactUsPage(): View
    {
        return view('contact-us'); // or your actual view path
    }
    public function worksPage(): View
    {
        return view('our-works'); // or your actual view path
    }

}
