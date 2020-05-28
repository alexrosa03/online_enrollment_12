<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

// Enroll Routes
Route::get('/enroll', 'EnrolledSubjectController@show')->name('enrollment.enroll');

//Subject Routes
Route::get('/students', 'StudentController@index')->name('student.index');

//Student Routes
Route::get('/subjects', 'SubjectController@index')->name('subject.index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
