<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//student login
Route::get('/', function () {
    return view('student_login');
});
Route::post('/studentlogin','StudentController@student_login_dashboard');
Route::get('/student_dashboard','StudentController@student_dashboard');
Route::get('/student_profile','StudentController@studentprofile');
Route::get('/student_setting','StudentController@student_setting');
Route::get('/student_logout','StudentController@student_logout');
Route::post('/student_update','StudentController@updateownstudent');

//admin login
Route::get('/admin', function () {
    return view('admin.admin_login');
});
Route::post('/adminlogin','AdminController@login_dashboard');
Route::get('/admin_dashboard','AdminController@admin_dashboard');
Route::get('/viewprofile','AdminController@viewprofile');
Route::get('/settings','AdminController@settings');








//logout
Route::get('/logout','AdminController@logout');

//add student
Route::get('/add_student','AddstudentController@addstudent');

Route::post('/save_student','AddstudentController@savestudent');

//all student
Route::get('/all_student','AllstudentController@allstudent');
Route::get('/delete_student/{student_id}','AllstudentController@deletestudent');
Route::get('/edit_student/{student_id}','AllstudentController@editstudent');
Route::post('/update_student/{student_id}','AllstudentController@updatestudent');


//view student info

Route::get('/view_student/{student_id}','AllstudentController@viewstudent');
//student information
Route::get('/tutionfee','TutionfeeController@atutionfee');
Route::get('/result','ResultController@result');
//courses
Route::get('/CSE','CseController@cse');
Route::get('/EEE','EeeController@eee');
Route::get('/BBA','BbaController@bba');
Route::get('/LAW','LawController@law');
Route::get('/ETE','EteController@ete');
Route::get('/Buisness','BuisnessController@buisness');
Route::get('/civil','CivilengineeringController@civil');
Route::get('/teacher','TeacherController@teacher');
Route::get('/MBA','MbaController@mba');
Route::get('/Hotel','HotelController@hotel');
Route::get('/allteacher','AllteacherController@allteacher');
Route::get('/addteacher','AllteacherController@addteacher');
Route::post('/save_teacher','AllteacherController@saveteacher');

Route::get('/delete_teacher/{teacher_id}','AllteacherController@deleteteacher');
Route::get('/edit_teacher/{teacher_id}','AllteacherController@editteacher');
Route::post('/update_teacher/{teacher_id}','AllteacherController@updateteacher');

Route::get('/view_teacher/{teacher_id}','AllteacherController@viewteacher');
//student_login





