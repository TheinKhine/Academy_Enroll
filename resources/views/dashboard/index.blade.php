<!DOCTYPE html>
<html lang="en">
<head>

@include('dashboard.header')

<style>
    /* Ensure the navbar spans the full width */
    .navbar {
      width: 100%;
      background-color: #00215E;
    }
    
    /* Adjust the sidebar and content positioning */
    .main-sidebar {
      margin-top: 56px; /* Adjust this value based on the height of your navbar */
      width: 15%;
    }

    .sidebar{
      text-align: center;
    }

    .content-wrapper {
      margin-top: 56px; /* Adjust this value based on the height of your navbar */
    }

    .custom-navbar-height {
      height: 57px;
    }

    /* Center text in sidebar items */
    .nav-item p {
      text-align: center;
      margin: 0;

    }

    .nav-link{
      color: white;
    }


    .nav-sidebar .nav-item {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 50px; /* Adjust as needed */
    }

    .nav-sidebar .nav-link p {
      width: 100%;
      text-align: center;
    }


    /* Optional: Adjust the inner elements to align properly within the new height */
    /* .custom-navbar-height .navbar-nav .nav-link {
      line-height: 20px;
    } */
  </style>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  
  <!-- Navbar -->
  <!-- <nav class="main-header navbar navbar-expand navbar-white navbar-light"> -->
    <!-- Left navbar links -->
    <!-- <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

    </ul> -->

    <!-- Right navbar links -->
    <!-- <ul class="navbar-nav ml-auto"> -->



      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>

    </ul>
  </nav> -->

  <nav class="navbar navbar-expand-lg fixed-top navbar-body custom-navbar-height">
  <div class="container-fluid">
  <a href="index3.html" class="brand-link">
      <img src={{  asset("dist/img/AdminLTELogo.png")}} alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="text-white font-weight-bold">GICM Academy</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Noti</a>
        </li>
        <li class="nav-item">
       
          <a class="nav-link" aria-current="page" href="#">{{ Auth::user()->name }}</a>
       
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}"
             onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
          </form>
        </li>
      </ul>
     
    </div>
  </div>
</nav>

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar">
   

    <!-- Sidebar -->
    <div class="sidebar"> 
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <!-- <a href="#" class="nav-link "> -->
              <p>
               Main Dashboard
              </p>
            <!-- </a> -->
          </li>

          <li class="nav-item">
            <!-- <a href="" class="nav-link"> -->
              
              <p>
              Student Dashboard
              </p>
            <!-- </a> -->
          </li>




          <li class="nav-item">
            <!-- <a href="" class="nav-link"> -->
              
              <p>
               Course Dashboard

              </p>
            <!-- </a> -->
          </li>

          <li class="nav-item">
            <!-- <a href="" class="nav-link"> -->
              
              <p>
              Teacher Dashboard
              </p>
            <!-- </a> -->
          </li>


        </ul>    
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        @yield('content')

        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@extends('dashboard.footer')
</body>
</html>