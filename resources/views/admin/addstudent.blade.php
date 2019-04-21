@extends('layout')


@section('content')

 <div class="col-12 col-lg-12 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title" style="text-align: center;">ADD STUDENT</h2>
                          <p class="alert-danger">
                           <?php 
                                 $exception  =  Session::get('exception'); 
                                 if($exception)
                                 {
                                    echo $exception;
                                    Session::put('exception',null);
                                 } 
                                 
                                 ?>
                             </p>
                          <form class="forms-sample" action="{{URL::to('/save_student')}}" method="post" enctype="multipart/form-data">
                          	{{csrf_field()}}
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Name</label>
                                  <input type="text" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" name="student_name" placeholder="Enter student name">
                                  



                                  
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Roll</label>
                                  <input type="text" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" name="student_roll" placeholder="Enter student Roll">
                                  
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student Phone</label>
                                  <input type="number" class="form-control p-input" id="exampleInputPassword1" name="student_phone" placeholder="Enter student Phone number">
                              </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Student Father's Name</label>
                                  <input type="text" class="form-control p-input" id="exampleInputPassword1" name="student_fathername" placeholder="Enter father's name">
                              </div>
                                   <div class="form-group">
                                  <label for="exampleInputPassword1">Student Mother's Name</label>
                                  <input type="text" class="form-control p-input" id="exampleInputPassword1" name="student_mothername"  placeholder="Enter mother name">
                              </div>
                                  <div class="form-group">
                               <label for="exampleInputPassword1"> Select Depertment</label> 
                                <select class="form-control p-input" name="student_depertment"> 
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
                                  <input type="date" class="form-control p-input" id="exampleInputPassword1" name="admission_year"  placeholder="">
                              </div>
                               <div class="form-group">
                                  <label for="exampleTextarea">Student Address</label>
                                  <textarea class="form-control p-input" id="exampleTextarea" rows="2" name="student_address"></textarea>
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student Email</label>
                                  <input type="email" class="form-control p-input" id="exampleInputPassword1" name="student_email" placeholder="Enter student email">
                              </div>
                              
                              <div class="form-group">
                              <label for="exampleInputPassword1">Student Password</label>
                              <input type="password" class="form-control p-input" id="exampleInputPassword1"  name="student_password"  placeholder="Enter password">
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
                              <button type="submit" class="btn btn-success btn-block">Submit</button>
                          </form>
                      </div>
                  </div>
                 </div>

@endsection