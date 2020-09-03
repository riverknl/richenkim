<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guest;

class RsvpController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $token = session('token');


        if ($token !== null) {
            $guests = Guest::where('token', $token)->get();

            return view('rsvp.index', compact('guests', 'token'));

        } else {
            return view('pages.rsvp');

        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $token = session('token');
        $guests = Guest::where('token', $token)->get();

        // Check of er gasten zijn met deze token
        if (NULL !== $guests) {
            // Check of er gasten aanwezig zijn
            if (NULL !== $request->is_coming) {
                // Loop de gasten
                foreach ($guests as $guest) {
                    // Check of het gasten id in de is_coming array voorkomt als key.
                    if (array_key_exists($guest->id, $request->is_coming)) {

                        $guest->is_coming = 1;

                        // Check of de gast een special_guest is en of die iets heeft ingevuld.
                        if ($guest->special_guest) {
                            if (array_key_exists($guest->id, $request->description)) {
                                $guest->description = $request->description[$guest->id];
                            }
                        }

                        $guest->save();

                    } else {

                        $guest->is_coming = 0;
                        $guest->save();

                    }
                }

            } else {
                // Niemand met deze token is aanwezig
                // Loop door de gasten en zet ze op niet aanwezig.
                foreach ($guests as $guest) {
                    $guest->is_coming = 0;
                    $guest->save();
                }
            }
        } else {
            dd('token fails');
        }

        return redirect('/rsvp/')->with('status', ['alert' => 'success', 'text' => 'RSVP Succesvol geupdate!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function check(Request $request)
    {
        $validate = $request->validate([
            'token' => 'required',
        ]);

        $guests = Guest::where('token', $request->token)->get();

        if ($guests->count() > 0) {
            $request->session()->put('token', $request->token);

            return redirect('/');
        } else {
            return redirect('/')->withError('Geen geldige RSVP code.');
        }
    }

}
