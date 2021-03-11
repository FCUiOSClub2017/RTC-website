<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LessonController extends Controller
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
        return view('lessons.index');
    }
    public function finalcutIndex()
    {
        return view('lessons.finalcutpro');
    }
    public function garagebandtIndex()
    {
        return view('lessons.garageband');
    }
    public function imoveIndex()
    {
        return view('lessons.imove');
    }
    public function logicproIndex()
    {
        return view('lessons.logicpro');
    }
}
