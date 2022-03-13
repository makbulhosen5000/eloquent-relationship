<?php

use App\Models\Student;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    return view('welcome');
});

Route::get('/dashboard', function () {
    // $student = User::find(1);
    // $student = User::find(1)->student;
    // return $student;
    // $user =Student::find(1);
    // $user = Student::find(2)->user;
    // return $user;
    $users = User::all();
    //return $users;
    return view('dashboard',compact('users'));
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
