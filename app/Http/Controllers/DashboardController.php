<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    //Show Dashboard Page
    public function dashboard()
    {
        return view('dashboard');
    }
}