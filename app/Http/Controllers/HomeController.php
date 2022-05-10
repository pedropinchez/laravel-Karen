<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    
    public function orders()
    {
        return view('order');
    }

    public function members()
    {
        return view('members');
    }

    public function bookings()
    {
        return view('bookings');
    }

    public function sports()
    {
        return view('sports');
    }
    
}
