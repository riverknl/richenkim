<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use App\Guest;

class GuestController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guests = Guest::all();

        return view('guests.index', compact('guests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guests.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => '',
            'phone' => '',
            'street' => '',
            'postcode' => '',
            'city' => '',
            'is_coming' => '',
            'special_guest' => '',
            'token' => '',
        ]);

        $is_coming = $request->is_coming == 'on' ? 1 : 0;
        $special_guest = $request->special_guest == 'on' ? 1 : 0;

        $guest = new Guest;
        $guest->first_name = $request->first_name;
        $guest->last_name = $request->last_name;
        $guest->email  = $request->email;
        $guest->phone  = $request->phone;
        $guest->street  = $request->street;
        $guest->postcode  = $request->postcode;
        $guest->city  = $request->city;
        $guest->is_coming  = $is_coming;
        $guest->special_guest  = $special_guest;
        $guest->token = $request->token;
        $guest->save();

        return redirect('/dashboard/guests/' )->with('status', ['alert' => 'success', 'text' => 'Gast is succesvol opgeslagen.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Guest $guest)
    {
        return view('guests.show', compact('guest'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guest $guest)
    {
        $validate = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => '',
            'phone' => '',
            'street' => '',
            'postcode' => '',
            'city' => '',
            'is_coming' => '',
            'special_guest' => '',
        ]);

        $is_coming = $request->is_coming == 'on' ? 1 : 0;
        $special_guest = $request->special_guest == 'on' ? 1 : 0;

        $guest->first_name = $request->first_name;
        $guest->last_name = $request->last_name;
        $guest->email  = $request->email;
        $guest->phone  = $request->phone;
        $guest->street  = $request->street;
        $guest->postcode  = $request->postcode;
        $guest->city  = $request->city;
        $guest->is_coming  = $is_coming;
        $guest->special_guest  = $special_guest;
        $guest->save();

        return redirect('/dashboard/guests/' . $guest->id )->with('status', ['alert' => 'success', 'text' => 'Gast is succesvol opgeslagen.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
