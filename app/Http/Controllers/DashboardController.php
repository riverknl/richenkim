<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guest;

class DashboardController extends Controller
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
        $guests = Guest::all();

        return view('dashboard', compact('guests'));
    }
}
