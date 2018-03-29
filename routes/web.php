<?php

Route::get('/', 'HomeController@index')->name('home');
Route::get('/intro', 'IntroductionController@index')->name('intro');
Route::get('/teacher', 'TeacherController@index')->name('teacher');
Route::get('/rule', 'RuleController@index')->name('rule');
Route::get('/contact', 'ContactController@index')->name('contact');
