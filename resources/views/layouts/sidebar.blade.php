@extends('layouts.admin')

@section('content')


 <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
              <div class="nav-profile-image">
                <img src="images/faces/face1.jpg" alt="profile">
                <span class="login-status online"></span> <!--change to offline or busy as needed-->              
              </div>
              <div class="nav-profile-text d-flex flex-column">
                <span class="font-weight-bold mb-2">User Name</span>
                <span class="text-secondary text-small">admin</span>
              </div>
              <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <span class="menu-title">dashboard</span>
              <i class="mdi mdi-view-dashboard menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/Bus/bus.html">
              <span class="menu-title">Bus</span>
              <i class="mdi mdi-bus menu-icon"></i>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="pages/parents/Parents.html">
              <span class="menu-title">Parents</span>
              <i class="mdi mdi-face-profile menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/student/student.html">
              <span class="menu-title">Students</span>
              <i class="mdi mdi-odnoklassniki menu-icon"></i>
            </a>
          </li>


          @endsection
        