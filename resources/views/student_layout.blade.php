@php
$student_id   = Session::get('student_id');
$student_info = DB::table('student')
             ->where('student_id',$student_id)
             ->first();

@endphp

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/salt/jquery/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2017 12:31:57 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title> মাতৃছায়া আন্তর্জাতিক বিশ্ববিদ্যায়লয়</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('node_modules/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{asset('node_modules/rickshaw/rickshaw.min.css')}}" />
  <link rel="stylesheet" href="{{asset('bower_components/chartist/dist/chartist.min.css')}}" />
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('images/favicon.html')}}" />
</head>
<body class="sidebar-dark">
  <!-- partial:partials/_settings-panel.html -->
  <div class="settings-panel">
    <ul class="nav nav-tabs" id="setting-panel" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="layouts-tab" data-toggle="tab" href="#layouts-section" role="tab" aria-controls="layouts-section" aria-expanded="true"><i class="mdi mdi-settings"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section"><i class="mdi mdi-account"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="close-button" href="#"><i class="mdi mdi-window-close"></i></a>
      </li>
    </ul>
  
  </div>
  <!-- partial -->
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar navbar-light col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="{{URL::to('/admin_dashboard')}}"><img src="edu.png" height="90px" width="20px" alt="MIU">MIU</a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="btn-group d-none d-sm-block">
          <button type="button" class="btn btn-secondary btn-sm text-muted border-0 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </div>
        <form class="form-inline mt-2 ml-3 mt-md-0 d-none d-sm-block">
          <div class="input-group solid">
            <span class="input-group-addon"><i class="mdi mdi-magnify"></i></span>
            <input type="text" class="form-control">
          </div>
        </form>
       <!--  <ul class="navbar-nav ml-lg-auto">
    
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator" id="MailDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-message-outline"></i>
              <span class="count bg-danger">4</span>
            </a>
            <div class="dropdown-menu navbar-dropdown mail-notification" aria-labelledby="MailDropdown">
              <a class="dropdown-item" href="{{URL::to('/student_viewprofile')}}">
                <div class="sender-img">
                  <img src="http://via.placeholder.com/47x47" alt="">
                 
                </div>
                <div class="sender">
                  <p class="Sende-name">View profile</p>
                  
                </div>
              </a>
              <a class="dropdown-item" href="{{URL::to('/student_settings')}}">
                <div class="sender-img">
                  <img src="http://via.placeholder.com/47x47" alt="">
                
                </div>
                <div class="sender">
                  <p class="Sende-name">Setting</p>
                  
                </div>
              </a>
              <a class="dropdown-item" href="{{URL::to('/student_logout')}}">
                <div class="sender-img">
                  <img src="http://via.placeholder.com/47x47" alt="">
                  
                </div>
                <div class="sender">
                  <p class="Sende-name">Log out</p>
                 
                </div>
              </a>
           
            </div>
          </li>
        </ul> -->
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <div class="user-info">
            <div class="profile">
              <img src="http://via.placeholder.com/47x47" alt="">
              <!-- {{URl::to('$student_info->student_image')}} -->
            </div>
            <div class="details">
               <!-- <a class="nav-link" href="{{URL::to('/adim_dashboard')}}" -->
              <p class="user-name">{{strtoupper($student_info->student_name)}}</p>
              <p class="designation"></p>
            </div>
          </div>
          <ul class="nav">
            <!--main pages start-->
            <li class="nav-item nav-category">
              <span class="nav-link">Information storage</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{URL::to('/student_profile')}}">
                <i class="mdi mdi-gauge menu-icon"></i>
                <span class="menu-title">View Profile</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{URL::to('/student_setting')}}">
                <i class="mdi mdi-puzzle menu-icon"></i>
                <span class="menu-title">Settings </span>
                <span class="badge badge-danger badge-pill ml-auto"></span>
              </a>
            </li>
               <li class="nav-item">
              <a class="nav-link" href="{{URL::to('/student_logout')}}">
                <i class="mdi mdi-puzzle menu-icon"></i>
                <span class="menu-title">Log Out </span>
                <span class="badge badge-danger badge-pill ml-auto"></span>
              </a>
            </li>
            <!--main pages end-->
            <!--sample pages start-->
        
           
            <!--forms end-->
            <!--Apps start-->
           
          </ul>
        </nav>
        <!-- partial -->
        <div class="content-wrapper">
          <div class="row">
       

        @yield('content')



          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="float-right">
                <a href="#">kishor laskar</a> &copy; 2019
            </span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- row-offcanvas ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{asset('node_modules/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('node_modules/popper.js/dist/umd/popper.min.js')}}"></script>
  <script src="{{asset('node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{asset('node_modules/flot/jquery.flot.js')}}"></script>
  <script src="{{asset('node_modules/flot/jquery.flot.resize.js')}}"></script>
  <script src="{{asset('node_modules/flot/jquery.flot.categories.js')}}"></script>
  <script src="{{asset('node_modules/flot/jquery.flot.pie.js')}}"></script>
  <script src="{{asset('node_modules/rickshaw/vendor/d3.v3.js')}}"></script>
  <script src="{{asset('node_modules/rickshaw/rickshaw.min.js')}}"></script>
  <script src="{{asset('bower_components/chartist/dist/chartist.min.js')}}"></script>
  <script src="{{asset('node_modules/chartist-plugin-legend/chartist-plugin-legend.js')}}"></script>
  <script src="{{asset('node_modules/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{asset('node_modules/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
  <!-- End plugin js for this page-->
  
   <script src="{{asset('node_modules/datatables.net/js/jquery.dataTables.js')}}"></script>
  <script src="{{asset('node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{asset('js/data-table.js')}}"></script>

 <!--  <script src="{{asset('js/data-table.js')}}"></script> -->
  <!-- inject:js -->
  <script src="{{asset('js/off-canvas.js')}}"></script>
  <script src="{{asset('js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('js/misc.js')}}"></script>
  <script src="{{asset('js/settings.js')}}"></script>
 
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('js/dashboard_1.js')}}"></script>
 
    
  </script>
  
</body>


<!-- Mirrored from www.urbanui.com/salt/jquery/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2017 12:32:50 GMT -->
</html>
