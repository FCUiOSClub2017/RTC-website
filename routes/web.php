<?php

Route::get('/', 'HomeController@index')->name('home');
Route::get('/intro', 'IntroductionController@index')->name('intro');
Route::get('/teacher', 'TeacherController@index')->name('teacher');
Route::get('/rule', 'RuleController@index')->name('rule');
Route::get('/contact', 'ContactController@index')->name('contact');
Route::prefix('/lesson')->group(function () {
    Route::get('/', 'LessonController@index')->name('lesson.index');
    Route::get('finalcutpro', 'LessonController@finalcutIndex')->name('lesson.finalcut');
    Route::get('garageband', 'LessonController@garagebandtIndex')->name('lesson.garageband');
    Route::get('imove', 'LessonController@imoveIndex')->name('lesson.imove');
    Route::get('logicpro', 'LessonController@logicproIndex')->name('lesson.logicpro');
});
