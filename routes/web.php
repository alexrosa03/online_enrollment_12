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
Route::get('/enroll/{subjectName}', 'EnrolledSubjectController@show_results');
Route::post('/enroll/student/{subjectId}', 'EnrolledSubjectController@enroll_student');

//Student Routes
Route::get('/students', 'StudentController@index')->name('student.index');
Route::post('/students', 'StudentController@store')->name('student.store');
Route::delete('/students/delete/{id}', 'StudentController@delete');
Route::put('/students/edit/{id}', 'StudentController@update');

//Subject Routes
Route::get('/subjects', 'SubjectController@index')->name('subject.index');
Route::get('/subjects/{id}', 'SubjectController@show')->middleware('auth');
Route::post('/subjects', 'SubjectController@store')->name('subject.store');
Route::put('/subjects/edit/{id}', 'SubjectController@update');
Route::delete('/subjects/delete/{id}', 'SubjectController@delete');
Route::delete('/subjects/unenroll/{Id}', 'SubjectController@unenroll');

//Authentication Routes(Generated)
Auth::routes(['register' => false]);
// Auth::routes(['register' => false]); //disable registration


Route::get('/home', 'HomeController@index')->name('home');
