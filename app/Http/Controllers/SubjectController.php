<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;

class SubjectController extends Controller
{
    public function index() {
        $subjects = Subject::all();

        return view('subject.subjects', [
            'subjects' => $subjects
        ]);
    }

    public function store() {
        $subject = new Subject();

        $subject->name = request('name');
        $subject->capacity = request('capacity');
        $subject->room = request('room');
        $subject->schedule = request('schedule');
        $subject->enrollees = 0;

        $subject->save();
    }

    public function update($id) {
        $subject = Subject::find($id);

        $subject->name = request('subjectName');
        $subject->capacity = request('capacity');
        $subject->room = request('room');
        $subject->schedule = request('schedule');

        $subject->save();
    }

    public function delete($id) {
        Subject::destroy($id);
    }

    public function show($id) {
        
    }
}
