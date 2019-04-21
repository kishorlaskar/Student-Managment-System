<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BbaController extends Controller
{
     public function bba()
   {
   	   $bbastudent_info=DB::table('student')
   	                 ->where(['student_depertment'=>2])
                      ->get();

   	  $manage_student=view('admin.Courses.bba')
   	                 ->with('bba_student_info',$bbastudent_info);
   	       return view('layout')
   	          ->with('bba',$manage_student);

   	          return view('admin.Courses.bba');



      }
   
}
