@extends('dashboard.index')
@section('content')

<div class="container">
<div class="row row-cols-1 row-cols-md-3 g-4 mt-5 pt-5">
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
  </div>
 
</div>
</div>
@endsection