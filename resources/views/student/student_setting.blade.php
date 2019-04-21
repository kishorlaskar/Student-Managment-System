@extends('student_layout')


@section('content')

 <div class="col-12 col-lg-12 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title" style="text-align: center;">Update Student Info</h2>
                           <p class="alert-info">
                           <?php 
                                 $exception  =  Session::get('exception'); 
                                 if($exception)
                                 {
                                    echo $exception;
                                    Session::put('exception',null);
                                 } 
                                 
                                 ?>
                             </p>
                     
                          <form class="forms-sample" action="{{URL::to('/student_update')}}" method="post" enctype="multipart/form-data">
                          	{{csrf_field()}}
                             
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student Phone</label>
                                  <input type="number" class="form-control p-input" id="exampleInputPassword1" name="student_phone" value="{{$student_profile_setting->student_phone}}">
                              </div>
                               
                               
                               <div class="form-group">
                                  <label for="exampleTextarea">Student Address</label>
                                  <input type="text" name="student_address" class="form-control p-input" value="{{$student_profile_setting->student_address}}" > 
                              </div>

                              
                              
                              <div class="form-group">
                              <label for="exampleInputPassword1">Student Password</label>
                              <input type="password" class="form-control p-input" id="exampleInputPassword1"  name="student_password" value="{{$student_profile_setting->student_password}}">
                              </div>
                             
                      
                              <button type="submit" class="btn btn-success btn-block">Update Student profile</button>
                          </form>
                      </div>
                  </div>
                 </div>


@endsection