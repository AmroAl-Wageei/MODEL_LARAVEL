<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class invokController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return "<h1> I'm Invoke</h1>";
        // return "I'm Team 6 ";

    }
}
