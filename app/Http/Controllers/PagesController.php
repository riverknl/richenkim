<?php

namespace App\Http\Controllers;

use App\Guest;


class PagesController extends Controller
{

    public function programma()
    {
        $token = session('token');

        if($token !== null)
        {
            $guest = Guest::where('token', $token)->first();

            return view('pages.programma', compact('guest'));
        }

        return view('pages.programma');
    }

    public function praktischeInformatie()
    {
        return view('pages.praktischeinformatie');
    }

    public function cadeauTips()
    {
        $token = session('token');
        if($token !== null)
        {
            return view('pages.cadeautips');

        }

        return redirect('/');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
