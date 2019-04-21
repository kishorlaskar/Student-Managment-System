<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();

class AllteacherController extends Controller
{


  public function addteacher()
  {
	return view('admin.teacher.addteacher');
  }
  public function saveteacher(Request $request)
  {
   	     //return $request->all();
   	        $data = array();
            $data['teacher_id'] = $request->teacher_id;
            $data['teacher_name'] = $request->teacher_name;
            $data['teacher_designation'] = $request->teacher_designation	;
            $data['teacher_email'] = $request->teacher_email;
            $data['teacher_phone'] = $request->teacher_phone;
            $data['teacher_address'] = $request->teacher_address;
            $data['teacher_depertment'] = $request->teacher_depertment;
            
           $image=$request->file('teacher_image');
           if($image) {
           	$image_name = str_random(20);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name= $image_name.'.'.$ext;
            $upload_path= 'image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->storeAs($upload_path , $image_url);
            if ($success) {

             		$data['teacher_image']=$image_url;
             		DB::table('teacher')->insert($data);
             		Session::put('exception','teacher added successfully');
             		return Redirect::to('/addteacher');
             	}


           }
              $image_url=0;
            $data ['teacher_image'] = $image_url;
                   DB::table('teacher')->insert($data);
                   Session::put('exception','teacher added successfully');
                   return Redirect::to('/addteacher');

                   DB::table('teacher')->insert($data);
                   Session::put('exception','teacher added successfully');
                   return Redirect::to('/addteacher');
        
            // $image=$request->file('teacher_image');
            // $image_full_name='';
            //  if ($image) {

            //  	$image_name = str_random(20);
            //  	 $text=strtolower($image->getClientOriginalExtension());
            //    $image_full_name= $image_name.'.'.$text;
            //  	$upload_path= 'public/image';
            //  	$image_url= $image_full_name;
            //  	$success=$image->storeAs($upload_path , $image_url);
            //  	if ($success) {

            //  		$data['teacher_image']=$image_url;
            //  		DB::table('teacher')->insert($data);
            //  		Session::put('exception','teacher added successfully');
            //  		return Redirect::to('/addteacher');
            //  	}
            //  	else{return 'error';}

            //  }
            //  $image_url=0;
            //  $data ['teacher_image'] = $image_url;
            //  DB::table('teacher')->insert($data);
            //  Session::put('exception','teacher added successfully');
            //  return Redirect::to('/addteacher');

            //  DB::table('teacher')->insert($data);
            //  Session::put('exception','teacher added successfully');
            //  return Redirect::to('/addteacher');
        

   }
    public function allteacher()
      {
   	  $allteacher_info=DB::table('teacher')
                      ->get();

   	  $manage_teacher=view('admin.teacher.allteacher')
   	                 ->with('all_teacher_info',$allteacher_info);
   	       return view('layout')
   	          ->with('allteacher',$manage_teacher);

   	      }
   	       public function deleteteacher($teacher_id)
      {
        DB::table('teacher')
           ->where('teacher_id',$teacher_id)
           ->delete();

           return Redirect::to('/allteacher');

      }
      public function viewteacher($teacher_id)
      {

        
      $teacher_description_view = DB::table('teacher')
                                ->select('*')
                                ->where('teacher_id',$teacher_id)
                                ->first();


      $manage_description_teacher=view('admin.teacher.viewteacher')
                              ->with('teacher_description_profile',$teacher_description_view);
                        return view('layout')
                              ->with('viewteacher',$manage_description_teacher);





      }
      public function editteacher($teacher_id)
      {
         $teacher_description_view = DB::table('teacher')
                                ->select('*')
                                ->where('teacher_id',$teacher_id)
                                ->first();


      $manage_description_teacher=view('admin.teacher.edit_teacher')
                              ->with('teacher_description_profile',$teacher_description_view);
                        return view('layout')
                              ->with('edit_teacher',$manage_description_teacher);




      }
      public function updateteacher(Request $request,$teacher_id)
      {
           $data = array();
           $data['teacher_id'] = $request->teacher_id;
           $data['teacher_name'] = $request->teacher_name;
           $data['teacher_designation'] = $request->teacher_designation	;
           $data['teacher_email'] = $request->teacher_email;
           $data['teacher_phone'] = $request->teacher_phone;
           $data['teacher_address'] = $request->teacher_address;
           $data['teacher_depertment'] = $request->teacher_depertment;
           

          DB::table('teacher')
             ->where('teacher_id',$teacher_id)
             ->update($data);

            Session::put('exception','teacher update successfully');
             return Redirect::to('/allteacher');




        

               


      }




 
}
