<!DOCTYPE html>
<html lang="en">
<head>
@include('dashboard.header')

<style>
    .navbar {
      width: 100%;
      background-color: #00215E;
    }
    
    .main-sidebar {
      margin-top: 56px;
      width: 19%;
    }

    .sidebar {
      text-align: center;
      justify-content: center;
    }

    .content-wrapper {
      margin-top: 56px;
    }

    .custom-navbar-height {
      height: 57px;
    }

    .nav-item p {
      text-align: center;
      margin: 0;
    }

    .nav-link {
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100%; /* Ensure it takes the full height of the nav-item */
    }


    .nav-sidebar .nav-item {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 50px;
    }

    .nav-sidebar .nav-link p {
      width: 100%;
      text-align: center;
      justify-content: center;
    }
</style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top navbar-body custom-navbar-height">
    <div class="container-fluid">
      <a href="index3.html" class="brand-link">
        <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="text-white font-weight-bold">GICM Academy</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-white" aria-current="page" href="#">Noti</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" aria-current="page" href="#">{{ Auth::user()->name }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
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

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar">
    <div class="sidebar"> 
      <!-- Sidebar Menu -->
      <nav class="mt-4">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{ route('main.index') }}" class="nav-link">
              <p>Main Dashboard</p>
            </a>
          </li>
          
          <li class="nav-item mt-3">
            <a href="{{ route('student.index') }}" class="nav-link">
              <p>Student Dashboard</p>
            </a>
          </li>
          <li class="nav-item mt-3">
            <a href="{{ route('course.index') }}" class="nav-link">
              <p>Course Dashboard</p>
            </a>
          </li>
          <li class="nav-item mt-3">
            <a href="{{ route('teacher.index') }}" class="nav-link">
              <p>Teacher Dashboard</p>
            </a>
          </li>
        </ul>    
      </nav>
    </div>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        @yield('content')
      </div>
    </section>
  </div>
  <!-- /.content-wrapper -->
  @extends('dashboard.footer')
</div>

<!-- Include Bootstrap JS and dependencies (Popper.js and jQuery) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJTY1jpBV1CVo3Cnk3gY92ZQP2CJI6xnfbTMF6V7XF8cvrtvf" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</body>
</html>
