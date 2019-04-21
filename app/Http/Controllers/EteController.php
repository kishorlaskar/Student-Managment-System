<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EteController extends Controller
{
      public function ete()
   {
   	   $etestudent_info=DB::table('student')
   	                 ->where(['student_depertment'=>4])
                      ->get();

   	  $manage_student=view('admin.Courses.ete')
   	                 ->with('ete_student_info',$etestudent_info);
   	       return view('layout')
   	          ->with('ete',$manage_student);

   	          return view('admin.Courses.ete');



      }
   
}
