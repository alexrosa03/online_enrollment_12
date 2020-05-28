<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnrolledSubjectController extends Controller
{
    public function show() {
        return view('enrollment.enroll');
    }
}
