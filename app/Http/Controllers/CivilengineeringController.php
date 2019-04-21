<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CivilengineeringController extends Controller
{
      public function civil()
   {
   	 $civilstudent_info =DB::table('student')
   	                    ->where(['student_depertment'=>6])
   	                    ->get();

   	  $manage_student=view('admin.Courses.civil')
   	                 ->with('civil_student_info',$civilstudent_info);
   	           return view('layout')
   	               ->with('civil',$manage_student);

   	               return view('admin.Courses.civil');

   }
}
