@extends('layout')


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
                  <img src="#" alt="">
                  <p class="name">{{$teacher_description_profile->teacher_name}}</p>
                  <p class="designation">-{{$teacher_description_profile->teacher_designation}}</p>
                  

                  
                  
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
                      <i class="icon-social-linkedin icon">Email:</i>
                      <span style="font-family: sans-serif; font-size:15px;">
                        {{$teacher_description_profile->teacher_email}}
                      </span>
                    </a>
                    <a class="social-link" href="#">
                      <i class="icon-social-linkedin icon">Phone:</i>
                      <span style="font-family: sans-serif; font-size:15px;">
                        {{$teacher_description_profile->teacher_phone}}
                      </span>
                    </a>

                  	 <a class="social-link" href="#">
                      <i class="icon-social-linkedin icon">Depertment:</i>
                      <span style="font-family: sans-serif; font-size:15px;">
                      	{{convert_depertment($teacher_description_profile->teacher_depertment)}}</span>
                    </a>
                    <a class="social-link" href="#">
                      <i class="icon-social-linkedin icon">Address:</i>
                      <span style="font-family: sans-serif; font-size:15px;">{{$teacher_description_profile->teacher_address}}</span>
                    </a>
              
                
  
                  </div>
                </div>
              </div>
            </div>
            </div>


          








@endsection