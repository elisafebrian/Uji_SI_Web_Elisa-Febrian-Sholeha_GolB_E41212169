<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('template');
    
    }
    public function landing()
{
    return view('landing/landing');
}
}
