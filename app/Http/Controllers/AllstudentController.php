<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use DB;
use Session;
session_start();



class AllstudentController extends Controller
{
      public function allstudent()
      {
   	  $allstudent_info=DB::table('student')
                      ->get();

   	  $manage_student=view('admin.allstudent')
   	                 ->with('all_student_info',$allstudent_info);
   	       return view('layout')
   	          ->with('allstudent',$manage_student);



      }
      public function deletestudent($student_id)
      {
        DB::table('student')
           ->where('student_id',$student_id)
           ->delete();

           return Redirect::to('/all_student');

      }
      public function viewstudent($student_id)
      {

        
      $student_description_view = DB::table('student')
                                ->select('*')
                                ->where('student_id',$student_id)
                                ->first();


      $manage_description_student=view('admin.viewstudent')
                              ->with('student_description_profile',$student_description_view);
                        return view('layout')
                              ->with('viewstudent',$manage_description_student);





      }
      public function editstudent($student_id)
      {
         $student_description_view = DB::table('student')
                                ->select('*')
                                ->where('student_id',$student_id)
                                ->first();


      $manage_description_student=view('admin.edit_student')
                              ->with('student_description_profile',$student_description_view);
                        return view('layout')
                              ->with('edit_student',$manage_description_student);




      }
      public function updatestudent(Request $request,$student_id)
      {
          $data = array();
            $data['student_id'] = $request->student_id;
            $data['student_name'] = $request->student_name;
            $data['student_roll'] = $request->student_roll;
            $data['student_email'] = $request->student_email;
            $data['student_phone'] = $request->student_phone;
            $data['student_address'] = $request->student_address;
            $data['admission_year'] = $request->admission_year;
            $data['student_fathername'] = $request->student_fathername;
            $data['student_mothername'] = $request->student_mothername;
            $data['student_depertment'] = $request->student_depertment;
            $data['student_password'] = $request->student_password;

          DB::table('student')
             ->where('student_id',$student_id)
             ->update($data);

            Session::put('exception','student update successfully');
             return Redirect::to('/all_student');




        

               


      }



      
       	# code...
       

   
}
