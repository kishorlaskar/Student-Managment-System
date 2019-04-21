<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EeeController extends Controller
{
     public function eee()
   {
   	   $eeestudent_info=DB::table('student')
   	                 ->where(['student_depertment'=>3])
                      ->get();

   	  $manage_student=view('admin.Courses.eee')
   	                 ->with('eee_student_info',$eeestudent_info);
   	       return view('layout')
   	          ->with('eee',$manage_student);

   	          return view('admin.Courses.eee');



      }
   
}
