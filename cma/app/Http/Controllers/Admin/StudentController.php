<?php

namespace App\Http\Controllers\Admin;

use App\Course;
use App\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('admin.student.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();
        return view('admin.student.create',compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request,[
            'course' => 'required',
            'name' => 'required',
            'registration_id' => 'required',
            'instructor' => 'required',
            'semester'=> 'required',
            'section'=> 'required',
            'image' => 'required|mimes:jpeg,jpg,bmp,png',
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->name);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $image->getClientOriginalExtension();
            if (!file_exists('uploads/student'))
            {
                mkdir('uploads/student',0777,true);
            }
            $image->move('uploads/student',$imagename);
        }else{
            $imagename = "default.png";
        }
        $student = new Student();
        $student->course_id = $request->course;
        $student->name = $request->name;
        $student->registration_id = $request->registration_id;
        $student->instructor = $request->instructor;
        $student->semester = $request->semester;
        $student->section = $request->section;
        $student->image = $imagename;
        $student->save();
        return redirect()->route('student.index')->with('successMsg','Student Registration Successfully Saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        $courses = Course::all();
        return view('admin.student.edit',compact('student','courses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'course' => 'required',
            'name' => 'required',
            'registration_id' => 'required',
            'instructor' => 'required',
            'semester' => 'required',
            'section' => 'required',
            'image' => 'mimes:jpeg,jpg,bmp,png',
        ]);
        $student = Student::find($id);
        $image = $request->file('image');
        $slug = str_slug($request->name);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $image->getClientOriginalExtension();
            if (!file_exists('uploads/student'))
            {
                mkdir('uploads/student',0777,true);
            }
            unlink('uploads/student/'.$student->image);
            $image->move('uploads/student',$imagename);
        }else{
            $imagename = $student->image;
        }
        $student->course_id = $request->course;
       $student->name = $request->name;
        $student->registration_id = $request->registration_id;
        $student->instructor = $request->instructor;
        $student->semester = $request->semester;
        $student->section = $request->section;
        $student->image = $imagename;
        $student->save();
        return redirect()->route('student.index')->with('successMsg','Student Registration Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        if (file_exists('uploads/student/'.$student->image))
        {
            unlink('uploads/student/'.$student->image);
        }
        $student->delete();
        return redirect()->back()->with('successMsg','Student Registration successfully Deleted');
    }
}
