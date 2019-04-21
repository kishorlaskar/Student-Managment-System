<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use DB;
use Session;
session_start();

class AdminController extends Controller

{
   //admin_dashboard 
   public function admin_dashboard()
   {
   	  return view ('admin.dashboard');
   }
     public function viewprofile()
   {
      return view ('admin.viewprofle');

   }
     public function settings()
   {
      return view ('admin.settings');
   }

    public function  logout()
  {
    Session::put('admin_name',null);
    Session::put('admin_id',null);

    return Redirect('/admin');

  }






   //login dashboard

    public function login_dashboard(Request $request)
    {
    	
    	$email     = $request->admin_email;
    	$password  = md5($request->admin_password);
    	$result    = DB::table ('admin')
    	->where('admin_email',$email)
    	->where('admin_password',$password)
    	->first(); 

    	if($result)
    	{

    		Session::put('admin_email',$result->admin_email);
    		Session::put('admin_email',$result->admin_id);
    		return Redirect::to('/admin_dashboard');
    	}
    	else
    	{
    		Session::put('exception', 'Email or Password is invalid');
    		return Redirect::to('/admin');
    	}
    }
}
