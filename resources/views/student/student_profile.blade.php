@extends('student_layout')


@section('content')

@php

  function convert_depertment ($value)
  {

$values=[

  	1=>'CSE',
  	2=>'BBA',
  	3=>'EEE',
  	4=>'ETE',
  	5=>'MBA',
  	6=>'CE',
  	7=>'Buisness and Enterprenurship',
  	8=>'Hotel and Tourism',
  	9=>'LAW',
  	];

  	return $values[$value];

  } 




@endphp

          <div class="row user-profile">
            <div class="col-lg-12 side-left">
              <div class="card mb-4">
                <div class="card-body avatar">
                  <h2 class="card-title">Info</h2>
                  <img src="" alt="">
                  <p class="name">{{$student_profile->student_name}}</p>
                  <p class="designation">Roll-{{$student_profile->student_roll}}</p>
                  <a class="email" href="#">{{$student_profile->student_email}}</a>
                  
                  
                </div>
              </div>
              <div class="card mb-4">
                <div class="card-body overview">
                  <ul class="achivements">
                    <li><p>34</p><p>Projects</p></li>
                    <li><p>23</p><p>Task</p></li>
                    <li><p>29</p><p>Completed</p></li>
                  </ul>
                  <div class="wrapper about-user">
                    <h2 class="card-title mt-4 mb-3" style="text-align: center;">About</h2>
                    <p></p>
                  </div>
                  <div class="info-links">

                  	 <a class="social-link" href="#">
                      <i class="icon-social-linkedin icon">Depertment:</i>
                      <span style="font-family: sans-serif; font-size:15px;">
                        {{convert_depertment($student_profile->student_depertment)}}
                      	</span>
                    </a>
                    <a class="social-link" href="#">
                      <i class="icon-social-linkedin icon">Address:</i>
                      <span style="font-family: sans-serif; font-size:15px;">
                        {{$student_profile->student_address}}

                      </span>
                    </a>
                     <a class="social-link" href="#">
                      <i class="icon-social-linkedin icon">Father Name:</i>
                      <span style="font-family: sans-serif; font-size:15px;">
                        {{$student_profile->student_fathername}}
                      </span>
                    </a>
                                        
                    <a class="social-link" href="#">
                      <i class="icon-social-facebook icon">Mother Name:</i>
                      <span style="font-family: sans-serif; font-size:15px;">
                        
                        {{$student_profile->student_mothername}}
                      </span>
                    </a>

                    <a class="social-link" href="#">
                      <i class="icon-social-linkedin icon">Phone:</i>
                      <span style="font-family: sans-serif; font-size:15px;">
                        {{$student_profile->student_phone}}
                        
                      </span>
                    </a>
                    <a class="social-link" href="#">
                      <i class="icon-social-linkedin icon">Admission Year:</i>
                      <span style="font-family: sans-serif; font-size:15px;">
                        {{$student_profile->admission_year}}
                      </span>
                    </a>
                
  
                  </div>
                </div>
              </div>
            </div>
            </div>


          








@endsection