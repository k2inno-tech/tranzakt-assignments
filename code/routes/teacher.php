<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('teacher')->user();

    //dd($users);
    $userType = 'teacher';
    return view('adminlte.teacher.home', compact('userType'));
})->name('home');


Route::resource('subject', 'SubjectController')->middleware('teacher');
Route::resource('grade', 'GradeController')->middleware('teacher');
