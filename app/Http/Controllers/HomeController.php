<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guest;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $token = session('token');

        if($token !== null)
        {
            $guests = Guest::where('token', $token)->get();
            return view('pages.home', compact('guests'));

        } else
        {
            $guests = [];
            return view('home', compact('guests'));
        }
    }

    public function destroySession(Request $request)
    {
        $request->session()->forget('token');

        return redirect('/');
    }
}
