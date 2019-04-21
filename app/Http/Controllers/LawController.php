<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LawController extends Controller
{

      public function law()
   {
   	   $lawstudent_info=DB::table('student')
   	                   ->where(['student_depertment'=>9])
   	                   ->get();

   	  $manage_student=view('admin.Courses.law')
   	                 ->with('law_student_info',$lawstudent_info);

   	                 return view('layout')
   	                       ->with('law',$manage_student);

   	                       return view('admin.Courses.law');
   }

}
