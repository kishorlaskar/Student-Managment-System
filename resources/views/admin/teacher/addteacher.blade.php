@extends('layout')


@section('content')

 <div class="col-12 col-lg-12 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title" style="text-align: center;">ADD TEACHER</h2>
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
                          <form class="forms-sample" action="{{URL::to('/save_teacher')}}" method="post" enctype="multipart/form-data">
                          	{{csrf_field()}}
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Teacher's Name</label>
                                  <input type="text" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" name=" teacher_name" placeholder="Enter teachers name">
                                  



                                  
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Designation</label>
                                  <input type="text" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" name="teacher_designation" placeholder="Enter teacher designation">
                                  
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Teacher Email</label>
                                  <input type="email" class="form-control p-input" id="exampleInputPassword1" name="teacher_email" placeholder="Enter teachers email">
                              </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Teacher Phone</label>
                                  <input type="number" class="form-control p-input" id="exampleInputPassword1" name="teacher_phone" placeholder="Enter teacher's phone number">
                              </div>
                                   <div class="form-group">
                                  <label for="exampleInputPassword1">Teacher Address</label>
                                  <input type="text" class="form-control p-input" id="exampleInputPassword1" name="teacher_address"  placeholder="Enter teacher's Address">
                              </div>
                                  <div class="form-group">
                               <label for="exampleInputPassword1"> Select Depertment</label> 
                                <select class="form-control p-input" name=" teacher_depertment"> 
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
                                  <label>Teacher's Image</label>
                                  <div class="row">
                                    <div class="col-12">
                                      <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Upload</label>
                                      <input type="file"class="form-control-file" id="exampleInputFile2"   aria-describedby="fileHelp" name="student_image">
                                     
                                    </div>
                                  </div>
                              </div>
                              <button type="submit" class="btn btn-success btn-block">Add Teacher</button>
                          </form>
                      </div>
                  </div>
                 </div>

@endsection