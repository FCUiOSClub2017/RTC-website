<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RuleController extends Controller
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
                'html'=>view('rule')->with(['title'=>'RTC空間使用須知'])->render(),
                'title'=>'RTC空間使用須知',
                'nav'=>'rule',
            ]);
        return view('rule')->with(['title'=>'RTC空間使用須知']);
    }
}
