<?php

namespace App\Http\Controllers;
use Illuminate\View\View;

class ServicesController
{
    public function drainageServicesPage(): View
    {
        return view('drainage-services'); // or your actual view path
    }

    public function plumbingInstallationsPage(): View
    {
        return view('plumbing-installations'); // or your actual view path
    }
    public function plumbingMaintenancesPage(): View
    {
        return view('plumbing-maintenances'); // or your actual view path
    }
}
