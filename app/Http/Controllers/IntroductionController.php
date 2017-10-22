<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IntroductionController extends Controller
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
                'html'=>view('intro')->with(['title'=>'RTC簡介'])->render(),
                'title'=>'RTC簡介',
                'nav'=>'intro',
            ]);
        return view('intro')->with(['title'=>'RTC簡介']);
    }
}
