@extends('layout')

@section('content')
  
          <h1 class="page-title"></h1>
          <div class="card">
            <div class="card-body">
              <h2 class="card-title">Data table</h2>
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                      	 
                      	 <th>Roll</th>
                          <th>Name</th>
                          <th>Depertment</th>
                          <th>phone</th>
                          <th>email</th>
                          <th>address</th>
                          <th>Photo</th>
                          <th>Actions</th>

                      </tr>
                    </thead>

                              <tbody>
                    	 @foreach ($cse_student_info as $view_student)
                    	  
                      <tr>
                      	 
                          <td>{{$view_student->student_roll}}</td>
                          <td>{{$view_student->student_name}}</td>
                          <td>
                        @if($view_student->	student_depertment==1)
                        <span class="lable lable-success">{{'CSE'}}</span> 	
                        @elseif($view_student->	student_depertment ==2)
                        <span class="lable lable-success">{{'BBA'}}</span>
                        @elseif($view_student->	student_depertment ==3)
                        <span class="lable lable-success">{{'EEE'}}</span>
                        @elseif($view_student->student_depertment==4)
                        <span class="lable lable-success">{{'ETE'}}</span>
                        @elseif($view_student->student_depertment ==5)
                        <span class="lable lable-success">{{'MBA'}}</span>
                        @elseif($view_student->student_depertment ==6)
                        <span class="lable lable-success">{{'CE'}}</span>
                        @elseif($view_student->student_depertment ==7)
                        <span class="lable lable-success">{{'Enterprenurship'}}</span>
                        @elseif($view_student->	student_depertment ==8)
                        <span class="lable lable-success">{{'Hotel & Tourism'}}</span>
                        @elseif($view_student->student_depertment ==9)
                        <span class="lable lable-success">{{'LAW'}}</span>
                        @else
                        <span class="lable lable-success">{{'Not Defiend'}}</span>
                        @endif
                          </td>
                          <td>{{$view_student->student_phone}}</td>
                            <td>{{$view_student->student_email}}</td>
                          <td>{{$view_student->student_address}}</td>
                          <td><img src="{{URL::to('storage/image/'.$view_student->student_image)}}" height="80"; width="100"; style="border-radius: 50%";> </td>
                          <td>

                          	<button class="btn btn-outline-primary">View</button>
                          	<button class="btn btn-outline-warning">Edit</button>
                          	<button class="btn btn-outline-danger">Delete</button>
                          	 
                            </td>
                      </tr>
                          @endforeach
                 </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        
@endsection