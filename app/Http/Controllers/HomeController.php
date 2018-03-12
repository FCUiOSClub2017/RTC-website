<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
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
                'html'=>view('home')->with(['title'=>'逢甲RTC蘋果教育訓練中心'])->render(),
                'title'=>'逢甲RTC蘋果教育訓練中心',
                'nav'=>'home',
            ]);
        return view('home')->with(['title'=>'逢甲RTC蘋果教育訓練中心']);
    }
}
