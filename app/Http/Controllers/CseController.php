<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CseController extends Controller
{
    public function cse()
   {
   	   
   	  $csestudent_info=DB::table('student')
   	                 ->where(['student_depertment'=>1])
                      ->get();

   	  $manage_student=view('admin.Courses.cse')
   	                 ->with('cse_student_info',$csestudent_info);
   	       return view('layout')
   	          ->with('cse',$manage_student);

   	          return view('admin.Courses.cse');



      }
   
}
