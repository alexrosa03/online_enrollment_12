<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enrolled_subject;
use App\Subject;
use App\Student;
use Response;

class EnrolledSubjectController extends Controller
{
    public function show() {
        return view('enrollment.enroll');
    }

    public function show_results($subjectName) {
        // $results = Subject::where('name', 'LIKE', '%$name%');
        $results = Subject::where('name', 'like', '%' . $subjectName . '%')->get();
        return response::json($results);
    }

    public function enroll_student($subjectId) {
        if(Subject::find($subjectId)){
            $birthday = Student::select('birthday')->where('id', request('id'))->get();
            if(Student::find(request('id')) && $birthday[0]['birthday'] == request('birthday')){
                $enroll = new Enrolled_subject;

                $enroll->subject_id = $subjectId;
                $enroll->student_id = request('id');

                $enroll->save();


                $subject = Subject::find($subjectId);
                $subject->enrollees += 1;

                $subject->save();
            }
        }
    }
}
