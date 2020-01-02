<?php

namespace App\Http\Controllers\Admin;

use App\Course;
use App\Student;
use App\Registration;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
     public function index()
    {
        $courseCount = Course::count();
        $studentCount = Student::count();
        $registrations = Registration::where('status',false)->get();
        return view('admin.dashboard',compact('courseCount','studentCount','registrations'));
    }
}
