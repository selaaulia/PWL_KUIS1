@extends('layouts.app')
@section('title')
    {{$title}}
@endsection
@section('statusMenu')
    {{$status}}
@endsection
@section('content')
 <!-- Page Content -->
<div class="page-heading about-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-content">
            <h4>Customer List</h4>
            <h2>our company</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br><br><br>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Customer Name</th>
                    <th>Job</th>
                    <th>City</th>
                    <th>Phone Number</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                <tr>
                    <td>{{$customer->name}}</td>
                    <td>{{$customer->job}}</td>
                    <td>{{$customer->city}}</td>
                    <td>{{$customer->phone}}</td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
        <br>
            <nav aria-label="Page navigation example" class="col-ml-9">
                <ul class="pagination justify-content-center">
                  <li class="page-item"><a class="page-link" href="/customer?page=1">1</a></li>
                  <li class="page-item"><a class="page-link" href="/customer?page=2">2</a></li>
                  <li class="page-item"><a class="page-link" href="/customer?page=2">3</a></li>
                </ul>
              </nav> 
    </div>

@endsection