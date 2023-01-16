<?php

namespace App\Http\Controllers;

class about extends Controller
{
    public function player()
    {

        echo 'Welcome to our club';

    }
    public function showw()
    {

        return view('Welcome');

    }
}
