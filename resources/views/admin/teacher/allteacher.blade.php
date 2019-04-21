
@extends('layout')


@section('content')
      
  
          <h1 class="page-title"></h1>
          <div class="card">
            <div class="card-body">
              <h2 class="card-title"></h2>
              <div class="row">
                <div class="col-12">
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
                  <table id="order-listing" class="table table-striped" style="width:95%;">
                    <thead>

                      <tr>
                      	 
                      	  <th>Teacher's  Name</th>
                          <th>Teacher's Designation</th>
                          <th>Teacher's Email</th>
                          <th>Teacher's phone</th>
                          <th>Teacher's  address</th>
                          <th>Teacher's Depertment</th>
                          <th>Teacher's  photo</th>
                          <th>Actions</th>

                      </tr>
                    </thead>

                              <tbody>
                    	 @foreach ($all_teacher_info as $view_teacher)
                    	  
                      <tr>
                      	 
                          <td>{{$view_teacher-> teacher_name}}</td>
                          <td>{{$view_teacher-> teacher_designation}}</td>
                          <td>{{$view_teacher-> teacher_email}}</td>
                          <td>{{$view_teacher-> teacher_phone}}</td>
                          <td>{{$view_teacher->teacher_address}}</td>
                          
                          <td>
                        @if($view_teacher->teacher_depertment ==1)
                        <span class="lable lable-success">{{'CSE'}}</span> 	
                        @elseif($view_teacher->teacher_depertment ==2)
                        <span class="lable lable-success">{{'BBA'}}</span>
                        @elseif($view_teacher->teacher_depertment ==3)
                        <span class="lable lable-success">{{'EEE'}}</span>
                        @elseif($view_teacher->teacher_depertment ==4)
                        <span class="lable lable-success">{{'ETE'}}</span>
                        @elseif($view_teacher->teacher_depertment ==5)
                        <span class="lable lable-success">{{'MBA'}}</span>
                        @elseif($view_teacher->teacher_depertment ==6)
                        <span class="lable lable-success">{{'CE'}}</span>
                        @elseif($view_teacher->teacher_depertment ==7)
                        <span class="lable lable-success">{{'Enterprenurship'}}</span>
                        @elseif($view_teacher->teacher_depertment ==8)
                        <span class="lable lable-success">{{'Hotel & Tourism'}}</span>
                        @elseif($view_teacher->teacher_depertment ==9)
                        <span class="lable lable-success">{{'LAW'}}</span>
                        @else
                        <span class="lable lable-success">{{'Not Defiend'}}</span>
                        @endif
                          </td>
                          <td><img src="{{URL::to('storage/image/'.$view_teacher->teacher_image)}}" height="50"; width="80"; style="border-radius: 50%";> </td>
                          <td>

                          	<a href="{{URL::to('/view_teacher/'.$view_teacher->teacher_id)}}"><button class="btn btn-outline-primary">View</button></a>
                          	<a href="{{URL::to('/edit_teacher/'.$view_teacher->teacher_id)}}"><button class="btn btn-outline-warning">Edit</button></a>
                          	<a href="{{URL::to('/delete_teacher/'.$view_teacher->teacher_id)}}" id="delete"><button class="btn btn-outline-danger" >Delete</button></a>
                          	 
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