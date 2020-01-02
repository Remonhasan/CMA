<?php

namespace App\Http\Controllers\Admin;

use App\Registration;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegistrationController extends Controller
{
     public function index()
    {
        $registrations = Registration::all();
        return view('admin.registration.index',compact('registrations'));
    }

    public function status($id){
        $registration = Registration::find($id);
        $registration->status = true;
        $registration->save();
         return redirect()->back()->with('successMsg','Registration Successfully confirmed');
        
    }

    public function destory($id){
        Registration::find($id)->delete();
        return redirect()->back()->with('successMsg','Registration Successfully deleted');
        
        
    }
}
