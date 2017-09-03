<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    if (request()->ajax()) return response()->json(['html'=>view('home')->with(['title'=>'Home'])->render(),'title'=>'Home']);
    return view('home')->with(['title'=>'home']);
})->name('rtc.home');

Route::get('about', function () {
    if (request()->ajax()) return response()->json(['html'=>view('about')->with(['title'=>'about'])->render(),'title'=>'about']);
    return view('about')->with(['title'=>'about']);
})->name('rtc.about');

Route::get('/portfolio', function () {
    if (request()->ajax()) return response()->json(['html'=>view('portfolio')->with(['title'=>'portfolio'])->render(),'title'=>'portfolio']);
    return view('portfolio')->with(['title'=>'portfolio']);
})->name('rtc.portfolio');

Route::get('/contact', function () {
    if (request()->ajax()) return response()->json(['html'=>view('contact')->with(['title'=>'contact'])->render(),'title'=>'contact','run'=>'contact_me']);
    return view('contact')->with(['title'=>'contact']);
})->name('rtc.contact');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::domain('club.www.ahkui.com')->group(function () {
    Route::get('user/{id?}', function ($id) {
        dd($id);
    });
});    Route::get('user/{id?}', function ($id) {
        dd($id,"");
    });
