@extends('layout')


@section('content')

     <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">All Students</h2>
                  @php
                  $student = DB::table('student')
                           ->count('student_id')


                  @endphp
                  <p style="font-family: cursive; font-size: 30px; font-weight: bold; text-align: center;">{{$student}}</p>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-1" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">All Teachers</h2>
                  @php
                  $teacher = DB::table('teacher')
                           ->count('teacher_id')


                  @endphp
                  <p style="font-family: cursive; font-size: 30px; font-weight: bold; text-align: center;">{{$teacher}}</p>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-2" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Tution Fee</h2>
                <!--   @php
                  $student = DB::table('student')
                           ->count('student_id')


                  @endphp -->
                  <p style="font-family: cursive; font-size: 30px; font-weight: bold; text-align: center;">12500 tk</p>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-3" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Revenue</h2>
                   <p style="font-family: cursive; font-size: 30px; font-weight: bold; text-align: center;">500 tk</p>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-4" class="card-float-chart"></div>
                </div>
              </div>
            </div>
          </div>
           <div class="row">
            <div class="col-md-4 grid-margin d-flex align-items-stretch">
              <div class="row">
                <div class="col-12 grid-margin d-flex align-items-stretch">
                  <div class="row">
                    <div class="col-12 col-sm-6 col-md-12 mb-3">
                      <div class="social-panel bg-facebook"><i class="#"></i><p class="mb-0">CSE</p>


                      </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-12 mb-3">
                      <div class="social-panel bg-twitter"><i class="#"></i><p class="mb-0">BBA</p></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-12 mb-3">
                      <div class="social-panel bg-google"><i class="#"></i><p class="mb-0">EEE</p></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-12 mb-3">
                      <div class="social-panel bg-twitter"><i class="#"></i><p class="mb-0">ETE</p></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-12 mb-3">
                      <div class="social-panel bg-google"><i class="#"></i><p class="mb-0">MBA</p></div>
                    </div>

                     <div class="col-12 col-sm-6 col-md-12 mb-3">
                      <div class="social-panel bg-facebook"><i class="#"></i><p class="mb-0">CE</p></div>
                    </div>

                     <div class="col-12 col-sm-6 col-md-12 mb-3">
                      <div class="social-panel bg-twitter"><i class="#"></i><p class="mb-0">Buisness & Enterprenurship</p></div>
                    </div>

                     <div class="col-12 col-sm-6 col-md-12 mb-3">
                      <div class="social-panel bg-google"><i class="#"></i><p class="mb-0">Hotel and Tourism</p></div>
                    </div>
                     <div class="col-12 col-sm-6 col-md-12 mb-3">
                      <div class="social-panel bg-facebook"><i class="#"></i><p class="mb-0">LAW</p></div>
                    </div>


                  </div>
                </div>
                <div class="col-12 d-flex align-items-stretch">
                  <div class="card w-100">
                    <div class="card-body px-3" style="height:333px">
                      <div class="d-flex align-items-center justify-content-between">
                        <h2 class="card-title">Notices</h2>
                        <p class="mb-2 text-muted">Transictions</p>
                      </div>
                      <div class="list py-2 d-flex flex-row align-items-center">
                        <div class="profile-img mr-4">
                          <img src="http://via.placeholder.com/47x47" alt="">
                          <span class="online-status bg-primary"></span>
                        </div>
                        <div class="profile-name">Mexwell Peter</div>
                        <div class="current-progress ml-auto">1000 tk </div>
                      </div>
                      <div class="list py-2 d-flex flex-row align-items-center">
                        <div class="profile-img mr-4">
                          <img src="http://via.placeholder.com/47x47" alt="">
                          <span class="online-status bg-primary"></span>
                        </div>
                        <div class="profile-name">Mexwell </div>
                        <div class="current-progress ml-auto">450 tk</div>
                      </div>
                      <div class="list py-2 d-flex flex-row align-items-center">
                        <div class="profile-img mr-4">
                          <img src="http://via.placeholder.com/47x47" alt="">
                          <span class="online-status bg-danger"></span>
                        </div>
                        <div class="profile-name">Mexwell Peter</div>
                        <div class="current-progress ml-auto">900 tk</div>
                      </div>
                      <div class="list py-2 d-flex flex-row align-items-center">
                        <div class="profile-img mr-4">
                          <img src="http://via.placeholder.com/47x47" alt="">
                          <span class="online-status bg-success"></span>
                        </div>
                        <div class="profile-name">Mexwell Peter</div>
                        <div class="current-progress ml-auto">1900</div>
                      </div>
                    
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin d-flex align-items-stretch">
              <div class="card task-list w-100">
                <div class="card-body">
                  <h2 class="card-title">Total sits are : 300</h2>
                  <div class="task-cards selected">
                    <div class="wrapper d-flex flex-row align-items-center">
                      <div class="wrapper">
                        <p class="title">Sit Remaining</p>
                        <p class="reference-url">CSE</a></p>
                      </div>
                      <p class="ticket-number ml-auto">50</p>
                    </div>
                    <hr>
                    <div class="wrapper d-flex flex-row align-items-end justify-content-between">
                      <div class="amount d-flex flex-column">
                        <p class="reference-url">EEE</p>
                        <p class="ticket-number ml-auto">35</p>
                      </div>
                      <div class="amount d-flex flex-column">
                        <p class="reference-url">BBA</p>
                        <p class="ticket-number ml-auto">85</p>
                      </div>
                      <!-- <div class="status d-flex flex-column">
                        <small>STATUS</small>
                        <small class="value">Monday, 12pm</small>
                      </div>
                      <i class="mdi mdi-delete-empty"></i> -->
                    </div>
                  </div>
                  
                  <div class="task-cards">
                    <div class="wrapper d-flex flex-row align-items-center">
                      <div class="wrapper">
                        <p class="title">Monthly Revenu</p>
                        <p class="reference-url">Jan 2018-Dec 2018<a href="#"></a></p>
                      </div>
                      <p class="ticket-number ml-auto">25300</p>
                    </div>
                    <hr>
                    <div class="wrapper d-flex flex-row align-items-end justify-content-between">
                      <div class="amount d-flex flex-column">
                        <small>Jan 2019 - Apr 2019</small>
                        <small class="value">8000</small>
                      </div>
                      <div class="status d-flex flex-column">
                        <small> Daily Open Status</small>
                        <small class="value">sat-thu(9:00am-4:00pm)</small>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin d-flex align-items-stretch">
              <div class="row">
                <div class="col-12 grid-margin">
                  <div class="card user-visits w-100">
                    <div class="card-body">
                      <h2 class="card-title">User Visits</h2>
                      <div class="row mt-5">
                        <div class="col-6">
                          <p class="views text-muted">Views</p>
                          <p class="section">6080 sessions</p>
                          <!-- <a href="#" class="btn btn-secondary btn-sm"></a> -->
                        </div>
                        <div class="col-6">
                          <div id="sparkline-line-chart"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 global-card">
                  <div class="card bg-warning w-100">
                    <div class="card-body text-white d-flex flex-column align-items-center justify-content-center">
                      <h2>Admission is going on</h2>
                      <p>Admission open for summer 2019</p>
                      <p>we are cordialy welcome our new student</p>
                      <a href="#" class="btn btn-outline-secondary">View Details</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>




@endsection