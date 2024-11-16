<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // Method for the homepage
    public function homepage()
    {
        return view('homepage');
    }

    // Method for the Service page
    public function service()
    {
        return view('pages.service');
    }

    // Method for the Menu page
    public function menu()
    {
        return view('pages.menu');
    }

    // Method for the Shops page
    public function shops()
    {
        return view('pages.shops');
    }
}
