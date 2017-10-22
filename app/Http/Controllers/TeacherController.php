<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
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
                'html'=>view('teacher')->with(['title'=>'教學團隊'])->render(),
                'title'=>'教學團隊',
                'nav'=>'teacher',
            ]);
        return view('teacher')->with(['title'=>'教學團隊']);
    }
}
