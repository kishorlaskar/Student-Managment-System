<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class MbaController extends Controller
{
     public function mba()
   {
   	  $mbastudent_info=DB::table('student')
   	                   ->where(['student_depertment'=>6])
   	                   ->get();

   	  $manage_student=view('admin.Courses.mba')
   	                 ->with('mba_student_info',$mbastudent_info);

   	                 return view('layout')
   	                       ->with('mba',$manage_student);

   	                       return view('admin.Courses.mba');
   }
}
