<?php
// Route::any('adminer', '\Miroc\LaravelAdminer\AdminerController@index')->name('adminer')->middleware('auth');
// Route::any('adminerauto', '\Miroc\LaravelAdminer\AdminerAutologinController@index')->name('adminer.auto');

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
// Route::domain('club.ahkui.com')->group($clubroute);
// Route::domain('club.ahkui.com')->group($clubroute);
// Route::domain('club.ahkui.com:99')->group($clubroute);

Route::get('/', 'HomeController@index')->name('home');
Route::get('/intro', 'IntroductionController@index')->name('intro');
Route::get('/teacher', 'TeacherController@index')->name('teacher');
Route::get('/rule', 'RuleController@index')->name('rule');
Route::get('/contact', 'ContactController@index')->name('contact');
/*
Route::get('about', function () {
    if (request()->ajax()) return 
        response()->json([
            'html'=>view('about')->with(['title'=>'about'])->render(),
            'title'=>'about'
        ]);
    return view('about')->with(['title'=>'about']);
})->name('about');

Route::get('/portfolio', function () {
    if (request()->ajax()) return 
        response()->json([
            'html'=>view('portfolio')->with(['title'=>'portfolio'])->render(),
            'title'=>'portfolio'
        ]);
    return view('portfolio')->with(['title'=>'portfolio']);
})->name('portfolio');

Route::get('/contact', function () {
    if (request()->ajax()) return 
        response()->json([
            'html'=>view('contact')->with(['title'=>'contact'])->render(),
            'title'=>'contact',
            'run'=>'contact_me'
        ]);
    return view('contact')->with(['title'=>'contact']);
})->name('contact');

Auth::routes();

// Route::domain('welcome.ahkui.com')->group(function () {
// // Route::domain('http://127.0.0.1')->group(function () {
//     Route::get('/', function () {
//         return view('welcome.home');
//     })->name('welcome.home');

// });
// Route::get('/', function () {
//     return view('iosclub.home')->with(['title'=>'iosclub']);
// })->name('iosclub.home');
