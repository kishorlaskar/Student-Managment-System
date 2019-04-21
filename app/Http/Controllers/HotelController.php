<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HotelController extends Controller
{
      public function hotel()
   {
   	  $hotelstudent_info=DB::table('student')
   	                   ->where(['student_depertment'=>7])
   	                   ->get();

   	  $manage_student=view('admin.Courses.tourism')
   	                 ->with('tourism_student_info',$hotelstudent_info);

   	                 return view('layout')
   	                       ->with('tourism',$manage_student);

   	                       return view('admin.Courses.tourism');
   	                   }
}
