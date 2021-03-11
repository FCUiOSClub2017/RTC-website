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
        return view('lesson.index');
    }
    public function finalcutIndex()
    {
        return view('lesson.finalcutpro');
    }
    public function garagebandtIndex()
    {
        return view('lesson.garageband');
    }
    public function imoveIndex()
    {
        return view('lesson.imove');
    }
    public function logicproIndex()
    {
        return view('lesson.logicpro');
    }
}
