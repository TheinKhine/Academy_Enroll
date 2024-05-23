
<head>
@extends('dashboard.index')
@section('content')

<style>
 .card-body {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
  }

  .card-title {
    margin: 0;
    font-size: 3.5rem; 
    font-weight: bold;
  }

  .card-text {
    margin: 0;
    font-size: 1.2rem; 
    font-weight: bold;
  }

  .card-img-top {
    margin-bottom: 1rem;
  }
</style>
</head>

<div class="container">
<div class="row row-cols-1 row-cols-md-3 g-4 mt-5 pt-5">

<a href="{{ route('student.index') }}">
  <div class="col">
    <div class="card h-100">
      
      <div class="card-body">
        <div>
      <img src={{  asset("dist/img/redball.png")}} class="card-img-top" alt="redball" style="height: auto; width: 15%;">
      </div>
        <h1 class="card-title">124</h1>
        <p class="card-text">Students</p>
      </div>
    </div>
  </div>
</a>
<a href="{{ route('teacher.index') }}">
  <div class="col">
    <div class="card h-100">
      
      <div class="card-body">
        <div>
      <img src={{  asset("dist/img/redball.png")}} class="card-img-top" alt="redball" style="height: auto; width: 15%;">
      </div>
        <h1 class="card-title">10</h1>
        <p class="card-text">Teachers</p>
      </div>
    </div>
  </div>
</a>
<a href="{{ route('course.index') }}" >
  <div class="col">
    <div class="card h-100">
      
      <div class="card-body">
        <div>
      <img src={{  asset("dist/img/redball.png")}} class="card-img-top" alt="redball" style="height: auto; width: 15%;">
      </div>
        <h1 class="card-title">3</h1>
        <p class="card-text">Courses</p>
      </div>
    </div>
  </div>
  </a>
  </div>

 
</div>
</div>
@endsection