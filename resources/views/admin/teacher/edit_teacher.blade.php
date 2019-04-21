@extends('layout')


@section('content')

 <div class="col-12 col-lg-12 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title" style="text-align: center;">EDIT TEACHER</h2>
                     
                          <form class="forms-sample" action="{{URL::to('/update_teacher',$teacher_description_profile->teacher_id)}}" method="post" enctype="multipart/form-data">
                          	{{csrf_field()}}
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Teacher Name</label>
                                  <input type="text" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" name="teacher_name" value="{{$teacher_description_profile->teacher_name}}">
                                  



                                  
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Designation</label>
                                  <input type="text" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" name="teacher_designation" value="{{$teacher_description_profile->teacher_designation}}">
                                  
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Teacher Email</label>
                                  <input type="email" class="form-control p-input" id="exampleInputPassword1" name="teacher_email"value="{{$teacher_description_profile->teacher_email}}">
                              </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Teacher Phone</label>
                                  <input type="text" class="form-control p-input" id="exampleInputPassword1" name="teacher_phone" value="{{$teacher_description_profile->teacher_phone}}">
                              </div>
                                   <div class="form-group">
                                  <label for="exampleInputPassword1">Teacher Address</label>
                                  <input type="text" class="form-control p-input" id="exampleInputPassword1" name="teacher_address" value="{{$teacher_description_profile->teacher_address}}">
                              </div>
                                  <div class="form-group">
                               <label for="exampleInputPassword1"> Select Depertment</label> 
                                <select class="form-control p-input" name="teacher_depertment"value="{{$teacher_description_profile->teacher_depertment}}"> 
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
                                  <label>Teacher Image</label>
                                  <div class="row">
                                    <div class="col-12">
                                      <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Upload</label>
                                      <input type="file"class="form-control-file" id="exampleInputFile2"   aria-describedby="fileHelp" name="student_image">
                                     
                                    </div>
                                  </div>
                              </div>
                              <button type="submit" class="btn btn-success btn-block">Update Teacher</button>
                          </form>
                      </div>
                  </div>
                 </div>


@endsection