<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Guest;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {
//        $password = '123LKJMN0';
//        $hashed = Hash::make($password);
//        echo $password . '<br />' . $hashed;

        $tokens = DB::table('guests')->select('token')->groupBy('token')->get();
        $token = '';
        foreach($tokens->sortBy('token') as $token)
        {
            $guests = Guest::where('token', $token->token)->get();
            echo '<strong>Token:</strong> ' . $token->token . '<br/>';
            foreach($guests as $guest)
            {
                echo '<strong>Naam:</strong> ' . $guest->fullName . '<br />';
            }
            echo '---- <br />';
        }

    }
}
