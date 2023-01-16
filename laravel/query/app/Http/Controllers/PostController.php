<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function create()
    {
        return view('posts.create');
    }

    public function insert(Request $request)
    {
        // return $request;

        DB::table('posts')->insert([

            // 'title'=>$request->title,
            // 'body'=> $request->body,
        ]);

        return response(' Data is recieved succsefully');
    }

}
