<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();

class AddstudentController extends Controller
{
     public function addstudent()
   {
   	  return view ('admin.addstudent');
   }
      public function savestudent(Request $request)
   {
   	     //return $request->all();
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
            $data['student_password'] = md5($request->student_password);
           
            $image=$request->file('student_image');
            $image_full_name='';
             if ($image) {

             	$image_name = str_random(20);
             	 $text=strtolower($image->getClientOriginalExtension());
               $image_full_name= $image_name.'.'.$text;
             	$upload_path= 'public/image';
             	$image_url= $image_full_name;
             	$success=$image->storeAs($upload_path , $image_url);
             	if ($success) {

             		$data['student_image']=$image_url;
             		DB::table('student')->insert($data);
             		Session::put('exception','student added successfully');
             		return Redirect::to('/add_student');
             	}
             	else{return 'error';}

             }
             //$image_url=0;
             $data ['student_image'] = $image_url;
             DB::table('student')->insert($data);
             Session::put('exception','student added successfully');
             return Redirect::to('/add_student');

             DB::table('student')->insert($data);
             Session::put('exception','student added successfully');
             return Redirect::to('/add_student');
        

   }


}
