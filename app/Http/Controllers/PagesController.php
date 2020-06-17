<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function programma()
    {
        return view('pages.programma');
    }

    public function praktischeInformatie()
    {
        return view('pages.praktischeinformatie');
    }

    public function cadeauTips()
    {
        return view('pages.cadeautips');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
