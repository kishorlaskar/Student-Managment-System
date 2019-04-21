<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use DB;
use Session;
session_start();

class StudentController extends Controller
{
    public function student_dashboard()
    {
    	return view('student.student_dashboard');
    }
    public function student_login_dashboard(Request $request)
    {
        $email     = $request->student_email;
    	$password  = md5($request->student_password);
    	$result    = DB::table ('student')
    	->where('student_email',$email)
    	->where('student_password',$password)
    	->first(); 

    	if($result)
    	{

    		Session::put('student_email',$result->student_email);
    		Session::put('student_id',$result->student_id);
    		return Redirect::to('/student_dashboard');
    	}
    	else
    	{
    		Session::put('exception', 'Email or Password is invalid');
    		return Redirect::to('/');
    	}
    }
     public function studentprofile()
      {
            $student_id=Session::get('student_id');
            $student_profile=DB::table('student')
                            ->select('*')
                            ->where('student_id',$student_id)
                            ->first();
    $manage_student = view('student.student_profile')
                    ->with('student_profile',$student_profile);
                    return view('student_layout')
                    ->with('student_profile',$manage_student);

      
      }
public function student_setting(){
	        $student_id=Session::get('student_id');
            $student_profile=DB::table('student')
                            ->select('*')
                            ->where('student_id',$student_id)
                            ->first();
    $manage_student = view('student.student_setting')
                    ->with('student_profile_setting',$student_profile);
                    return view('student_layout')
                    ->with('student_profile_setting',$manage_student);
}
  public function  student_logout()
  {
    Session::put('student_name',null);
    Session::put('student_id',null);

    return Redirect('/');

  }
  public function updateownstudent(Request $request)
  {            

  	        $student_id=Session::get('student_id');
            $data = array();
            $data['student_phone'] = $request->student_phone;
            $data['student_address'] = $request->student_address;
            $data['student_password'] = $request->student_password;

          DB::table('student')
             ->where('student_id',$student_id)
             ->update($data);

            Session::put('exception','student info update successfully');
             return Redirect::to('/student_setting');


  }
}
