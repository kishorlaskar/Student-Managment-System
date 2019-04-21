@extends('layout')


@section('content')

 <div class="col-12 col-lg-12 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title" style="text-align: center;">EDIT STUDENT</h2>
                     
                          <form class="forms-sample" action="{{URL::to('/update_student',$student_description_profile->student_id)}}" method="post" enctype="multipart/form-data">
                          	{{csrf_field()}}
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Name</label>
                                  <input type="text" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" name="student_name" value="{{$student_description_profile->student_name}}">
                                  



                                  
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Roll</label>
                                  <input type="text" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" name="student_roll" value="{{$student_description_profile->student_roll}}">
                                  
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student Phone</label>
                                  <input type="number" class="form-control p-input" id="exampleInputPassword1" name="student_phone"value="{{$student_description_profile->student_phone}}">
                              </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Student Father's Name</label>
                                  <input type="text" class="form-control p-input" id="exampleInputPassword1" name="student_fathername" value="{{$student_description_profile->student_fathername}}">
                              </div>
                                   <div class="form-group">
                                  <label for="exampleInputPassword1">Student Mother's Name</label>
                                  <input type="text" class="form-control p-input" id="exampleInputPassword1" name="student_mothername"value="{{$student_description_profile->student_mothername}}">
                              </div>
                                  <div class="form-group">
                               <label for="exampleInputPassword1"> Select Depertment</label> 
                                <select class="form-control p-input" name="student_depertment"value="{{$student_description_profile->student_depertment}}"> 
                                <option value="1">CSE</option>
                                <option value="2">BBA</option>
                                <option value="3">EEE</option>
                                <option value="4">ETE</option>
                                <option value="5">MBA</option>
                                <option value="6">CE</option>
                                <option value="7">Enterprenurship</option>
                                <option value="8">Hotel & Tourism</option>
                                <option value="9">LAW</option>
                                </select>
                              </div>
                               <div class="form-group">
                                  <label for="exampleInputPassword1">Admission Year</label>
                                  <input type="date" class="form-control p-input" id="exampleInputPassword1" name="admission_year"value="{{$student_description_profile->admission_year}}">
                              </div>
                               <div class="form-group">
                                  <label for="exampleTextarea">Student Address</label>
                                  <input type="text" name="student_address" class="form-control p-input" value="{{$student_description_profile->student_address}}"> 
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student Email</label>
                                  <input type="email" class="form-control p-input" id="exampleInputPassword1" name="student_email" value="{{$student_description_profile->student_email}}">
                              </div>
                              
                              <div class="form-group">
                              <label for="exampleInputPassword1">Student Password</label>
                              <input type="password" class="form-control p-input" id="exampleInputPassword1"  name="student_password"  value="{{$student_description_profile->student_password}}">
                              </div>
                             
                              <div class="form-group">
                                  <label>Student Image</label>
                                  <div class="row">
                                    <div class="col-12">
                                      <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Upload</label>
                                      <input type="file"class="form-control-file" id="exampleInputFile2"   aria-describedby="fileHelp" name="student_image">
                                     
                                    </div>
                                  </div>
                              </div>
                              <button type="submit" class="btn btn-success btn-block">Update Student</button>
                          </form>
                      </div>
                  </div>
                 </div>


@endsection