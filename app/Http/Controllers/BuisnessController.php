<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BuisnessController extends Controller
{
      public function buisness()
   {
   	   $enterprenurshipstudent_info=DB::table('student')
   	                 ->where(['student_depertment'=>7])
                      ->get();

   	  $manage_student=view('admin.Courses.enterprenurship')
   	                 ->with('enterprenurship_student_info',$enterprenurshipstudent_info);
   	       return view('layout')
   	          ->with('enterprenurship',$manage_student);

   	          return view('admin.Courses.enterprenurship');



   	  //return view ('admin.Courses.enterprenurship');
   }
}
