<head>

@extends('dashboard.index')
<style>
    .table-primary-colour{
        background-color: #2A629A;
        color: white;
    }
    .btn-blue{
        background-color: #6DC5D1 !important;
        color: white !important;
    }
    .btn-pink{
        background-color: pink !important;
        color: white !important;
    }
    .btn-red{
        background-color: red !important;
        color: white !important;
    }
</style>
</head>

@section('content')


<div class="container pt-5">
<table class="table ">
  <thead class="table-primary-colour">
  <tr>
      <th scope="col">Name</th>
      <th scope="col">Duration</th>
      <th scope="col">Register Date</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  <tr>
      <td>Full Cycle Development Bootcamp</td>
      <td>6 months</td>
      <td>03/12/2022</td>
      <td>
        <a  class="btn btn-blue">
            View
        </a>
        <a  class="btn btn-pink">
       Edit
        </a>
                                      
            <form class="d-inline-block">
                @method('delete')
                @csrf
                <button class="btn btn-red" onclick="return confirm('Are you sure you want to delete?')">Delete</button>
            </form>
      </td>
    </tr>
   
  </tbody>
</table>
</div>
@endsection