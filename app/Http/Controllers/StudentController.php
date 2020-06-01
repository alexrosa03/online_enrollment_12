<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function index() {
        $students = Student::all();

        return view('student.students', [
            'students' => $students
        ]);
    }

    public function store() {
        $student = new student();

        $student->id = request('id');
        $student->first_name = request('fname');
        $student->last_name = request('lname');
        $student->birthday = request('birthday');
        $student->course = request('course');

        $student->save();
    }

    public function delete($id) {
        Student::destroy($id);
    }

    public function update($id) {
        $student = Student::find($id);

        $student->id = request('id');
        $student->first_name = request('firstName');
        $student->last_name = request('lastName');
        $student->birthday = request('birthday');
        $student->course = request('course');

        $student->save();
    }
}
