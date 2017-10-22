<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) return 
            response()->json([
                'html'=>view('contact')->with(['title'=>'聯絡辦公室'])->render(),
                'title'=>'聯絡辦公室',
                'nav'=>'contact',
            ]);
        return view('contact')->with(['title'=>'聯絡辦公室']);
    }
}
