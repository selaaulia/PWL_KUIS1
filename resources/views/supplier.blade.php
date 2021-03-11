@extends('layouts.app')
@section('title')
    {{$title}}
@endsection
@section('statusMenu')
    {{$status}}
@endsection
@section('content')

<div class="page-heading about-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-content">
            <h4>Supplier List</h4>
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
                    <th>Supplier Name</th>
                    <th>Address</th>
                    <th>Phone Number</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($suppliers as $item)
                <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->alamat}}</td>
                    <td>{{$item->nomortelepon}}</td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
        <br>
            <nav aria-label="Page navigation example" class="col-ml-9">
                <ul class="pagination justify-content-center">
                  <li class="page-item"><a class="page-link" href="/supplier?page=1">1</a></li>
                  <li class="page-item"><a class="page-link" href="/supplier?page=2">2</a></li>
                </ul>
              </nav> 
    </div>

@endsection