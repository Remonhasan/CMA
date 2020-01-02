<?php

namespace App\Http\Controllers;

use App\Registration;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
     public function reserve(Request $request){
        $this->validate($request,[
            'course_name' => 'required',
            'name' => 'required',
            'registration_id' => 'required',
            'instructor' => 'required',
            'semester' => 'required',
            'section' => 'required'
            
        ]);
        $registration = new Registration();
        $registration->course_name = $request->course_name;
        $registration->name = $request->name;
        $registration->registration_id = $request->registration_id;
        $registration->instructor = $request->instructor;
        $registration->semester = $request->semester;
        $registration->section = $request->section;
        $registration->status = false;
        $registration->save();
      return redirect()->back()->with('successMsg','Registration request sent successfully ');
        return redirect()->back();
    }
}
